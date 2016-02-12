const gulp = require('gulp')
const browserSync = require('browser-sync')
const reload = browserSync.reload
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const cssnano = require('gulp-cssnano')
const rename = require('gulp-rename')
const uncss = require('gulp-uncss')
const browserify = require('browserify')
const source = require('vinyl-source-stream')
const buffer = require('vinyl-buffer')
const uglify = require('gulp-uglify')
const babelify = require('babelify')
const imagemin = require('gulp-imagemin')
const pngquant = require('imagemin-pngquant')
const imageminSvgo = require('imagemin-svgo')
const cache = require('gulp-cache')
// Para que babelify y jquery trabajen se deben instalar jquery, babel-preset-es2015 babel-preset-react
// sudo npm install --save jquery
// sudo npm install --save-dev babel-preset-es2015 babel-preset-react

// Variables
const globs = {
  build: './build',
  src: './src',
  wp: './',
  html: {
    main: './src/index.html',
    watch: './src/**/*.html'
  },
  styles: {
    main: './src/styles/scss/style.scss',
    watch: './src/styles/scss/**/*.scss',
    src: './src/styles',
    wp: './styles'
  },
  scripts: {
    main: './src/scripts/main.js',
    watch: './src/scripts/main.js',
    src: './src/scripts',
    wp: './scripts'
  },
  images: {
    main: './src/images/**',
    watch: './src/images/**/*.*',
    src: './src/images',
    wp: './images'
  },
  videos: {
    main: './src/videos/**',
    watch: './src/videos/**/*.*',
    src: './src/videos',
    wp: './videos'
  },
  fonts: {
    main: './src/styles/fonts/**',
    watch: './src/styles/fonts/**/*.*',
    src: './src/styles/fonts',
    wp: './styles/fonts'
  }
}

// Servidor - Browsersync
// gulp.task('serve', () => {
//   browserSync.init({
//     notify: false,
//     logPrefix: 'BS',
//     server: {
//       baseDir: [globs.wp]
//     },
//     host: '0.0.0.0'
//     port: 8000,
//     ui: {
//       port: 8001
//     },
//     browser: ['chromium-browser'
//     'firefox'
//     ]
//   })
// })

// HTML minificado
// gulp.task('build:html', () => {
//   return gulp.src(globs.html.main)
//     // .pipe(gulp.dest(globs.build))
//     // .pipe(htmlmin({collapseWhitespace: true}))
//     .pipe(gulp.dest(globs.build))
//     .pipe(gulp.dest(globs.dist))
// })

// Styles: CSS  Minificado
gulp.task('build:styles', ['styles'], () => {
  gulp.start('uncss')
})
gulp.task('styles', () => {
  return gulp.src(globs.styles.main)
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest(globs.wp))
    .pipe(gulp.dest(globs.styles.src))
})
// Optimiza styles.min.css
gulp.task('uncss', () => {
  return gulp.src(globs.styles.src + '/style.css')
    .pipe(uncss({
      html: ['index.html', globs.html.watch]
    }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(cssnano())
    .pipe(gulp.dest(globs.wp))
})

// Scripts: todos los archivos JS concatenados en uno solo minificado
gulp.task('build:scripts', () => {
  return browserify(globs.scripts.main)
    .transform(babelify, {presets: ['es2015', 'react']})
    .bundle()
    .pipe(source('main.js'))
    .pipe(buffer())
    .pipe(gulp.dest(globs.scripts.wp))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(globs.scripts.src))
    .pipe(gulp.dest(globs.scripts.wp))
})

// Images
gulp.task('build:images', () => {
  return gulp.src(globs.images.main)
    .pipe(cache(imagemin({
      optimizationLevel: 7,
      progressive: true,
      interlaced: true,
      multipass: true,
      use: [pngquant(), imageminSvgo()],
      svgoPlugins: [
        { removeViewBox: false }, // don't remove the viewbox atribute from the SVG
        { removeUselessStrokeAndFill: false }, // don't remove Useless Strokes and Fills
        { removeEmptyAttrs: false } // don't remove Empty Attributes from the SVG
      ]
    })))
    .pipe(gulp.dest(globs.images.wp))
})

// Inyectando css y js al index.html
gulp.task('inject', () => {
  gulp.src(globs.html.main)
    .pipe(inject(gulp.src([globs.styles.src + '/style.min.css', globs.scripts.src + '/main.min.js'], {read: false}), {relative: true}))
    .pipe(gulp.dest(globs.src))
})

// Inyectando las librerias Bower
gulp.task('wiredep', () => {
  gulp.src('./src/*.html')
    .pipe(wiredep({
      directory: './src/bower_components'
    }))
    .pipe(gulp.dest(globs.src))
})

// Copy
gulp.task('copy', () => {
  gulp.src(globs.fonts.src + '/**/*.*')
    .pipe(gulp.dest(globs.fonts.wp))
  gulp.src(globs.videos.watch)
    .pipe(gulp.dest(globs.videos.wp))
  gulp.src(globs.src + '/analyticstracking.php')
    .pipe(gulp.dest(globs.wp))
})

// Reload
gulp.watch([
  // globs.html.watch,
  globs.styles.watch,
  globs.scripts.watch,
  './bower.json'
]).on('change', reload)

// Watch
gulp.task('watch', () => {
  gulp.watch(globs.styles.watch, ['build:styles'])
  gulp.watch(globs.scripts.watch, ['build:scripts'])
  gulp.watch(globs.images.watch, ['build:images'])
})

// Build
gulp.task('build', ['build:styles', 'build:scripts', 'build:images', 'watch'])

// Default
gulp.task('default', ['build'], () => {
  gulp.start('copy')
})

