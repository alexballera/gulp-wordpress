<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="author" content="<?php bloginfo('admin_email'); ?>">

    <!-- SEO & SEM -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Responsive Web Design, Mobile First, Mobile Friendly, JavaScript, HTML5, CSS3">

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/u/0/+AlexBallera/posts">
    <link rel="publisher" href="https://plus.google.com/+AlexanderBalleraLugo/posts"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php bloginfo('name'); ?>">
    <meta itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta itemprop="image" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/img/alex-ballera.jpg">

    <!-- Twitter Card data: Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@alexballera" />
    <meta name="twitter:creator" content="@alexballera">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:image:src" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/img/alex-ballera.jpg">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">

    <!-- Open Graph data -->
    <meta property="og:url" content=" <?php bloginfo('url'); ?>" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/img/alex-ballera.jpg" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

    <!-- Mobile Optimization -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- img Icon -->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.jpg" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/touch-icon-ipad-retina.png">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="http://localhost/wp-content/themes/twentyfifteen-child/scripts/main.min.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
    <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>..twentyfifteen/js/html5.js"></script>
  <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  </head>
  <body>
  <?php include_once("analyticstracking.php") ?>
    <!--[if lt  IE  8]>
    <p  class="browsehappy">
      Estás usando  un  navegador <strong>desactualizado</strong>.
      Por favor <a  href="http://browsehappy.com/">actualiza  tu  navegador</a>
      Para  mejorar la  experiencia..
    </p>
    <![endif]-->
    <!-- Barra de Navegación -->
        <nav id="header" class="nav">
            <div class="nav__mobile">
                  <a class="nav__mobile--logo" href="#">
                    <picture class="nav__mobile--logo--picture">
                      <source
                      srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                      <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x">
                      <img
                      src="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.jpg"
                      srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                      <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x"
                      alt="Alex Ballera | Web Developer">
                      <figcaption>AlexBallera</figcaption>
                    </picture>
                  </a>
                  <button id="btnMenu" class="nav__mobile--btn inactive active"><i id="btnButton" class="fa fa-bars"></i></button>
            </div>
            <nav class="nav__menu--navbar">
                  <ul id="navbarMenu" class="nav__menu--list">
                      <li class="nav__menu--list--item"><a href="<?php bloginfo('url'); ?>/#responsive">Responsive</a></li>
                      <li class="nav__menu--list--item"><a href="<?php bloginfo('url'); ?>/#projects">Proyectos</a></li>
                      <li class="nav__menu--list--item"><a href="<?php bloginfo('url'); ?>/#articles">Artículos</a></li>
                      <li class="nav__menu--list--item"><a href="#openModal">Contáctame</a></li>
                  </ul>
            </nav>
        </nav>
    <!-- Fin de Barra de Navegación -->
        <!-- Header -->
        <header class="header">
              <picture class="header__picture">
                  <source
                  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                  <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x">
                  <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.jpg"
                  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera.svg,
                  <?php echo get_stylesheet_directory_uri(); ?>/img/alex-ballera@2x.svg 2x"
                  alt="Alex Ballera | Web Developer">
                  <figcaption class="header__picture--figcaption">
                      <span>Alex Ballera
                      <span>Front End Developer</span></span>
                      <span>Mobile Optimization & Responsive Web Design</span>
                  </figcaption>
              </picture>
              <section class="header__languages">
                    <ul class="header__languages--tech">
                          <li><i class="fa fa-html5"></i></li>
                          <li><i class="fa fa-css3"></i></li>
                          <li><i class="icon-javascript-alt"></i></li>
                          <li><i class="icon-ruby-on-rails"></i></li>
                          <li><i class="fa fa-wordpress"></i></li>
                          <li><i class="fa fa-git"></i></li>
                    </ul>
              </section>
        </header>
    <!-- Fin de Header -->