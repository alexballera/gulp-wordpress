<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="author" content="<?php bloginfo('admin_email'); ?>">

    <!-- SEO & SEM -->
    <meta name="description" content="Alex Ballera. Front-End Developer: Mobile Friendly, Responsive Web Design, JavaScript, HTML5, CSS3,...">
    <meta name="keywords" content="Responsive Web Design, Mobile First, Mobile Friendly, JavaScript, HTML5, CSS3">

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/u/0/+AlexBallera/posts">
    <link rel="publisher" href="https://plus.google.com/+AlexanderBalleraLugo/posts"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="AlexBallera | Web Developer">
    <meta itemprop="description" content="Alex Ballera. Front-End Developer: Mobile Friendly, Responsive Web Design, JavaScript, HTML5, CSS3,...">
    <meta itemprop="image" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/images/alex-ballera.jpg">

    <!-- Twitter Card data: Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@alexballera" />
    <meta name="twitter:creator" content="@alexballera">
    <meta name="twitter:title" content="AlexBallera | Web Developer">
    <meta name="twitter:image:src" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/images/alex-ballera.jpg">
    <meta name="twitter:description" content="Alex Ballera. Front-End Developer: Mobile Friendly, Responsive Web Design, JavaScript, HTML5, CSS3,...">

    <!-- Open Graph data -->
    <meta property="og:url" content=" http://alexballera.com/" />
    <meta property="og:title" content="AlexBallera | Web Developer" />
    <meta property="og:description" content="Alex Ballera. Front-End Developer: Mobile Friendly, Responsive Web Design, JavaScript, HTML5, CSS3,..." />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://raw.githubusercontent.com/alexballera/mi-portafolio/master/src/images/alex-ballera.jpg" />
    <meta property="og:site_name" content="AlexBallera | Web Developer" />
<!--     <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
    <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
    <meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <meta property="fb:admins" content="Facebook numberic ID" /> -->

    <!-- Mobile Optimization -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Images Icon -->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/alex-ballera.jpg" />
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon-iphone.png" />
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
                      srcset="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.svg,
                      images/alex-ballera@2x.svg 2x">
                      <img
                      src="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.jpg"
                      srcset="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.svg,
                      images/alex-ballera@2x.svg 2x"
                      alt="Alex Ballera | Web Developer">
                      <figcaption>AlexBallera</figcaption>
                    </picture>
                  </a>
                  <button id="btnMenu" class="nav__mobile--btn inactive active"><i id="btnButton" class="fa fa-bars"></i></button>
            </div>
            <nav class="nav__menu--navbar">
                  <ul id="navbarMenu" class="nav__menu--list">
                      <li class="nav__menu--list--item"><a href="#responsive">Responsive</a></li>
                      <li class="nav__menu--list--item"><a href="#projects">Proyectos</a></li>
                      <li class="nav__menu--list--item"><a href="#articles">Artículos</a></li>
                      <li class="nav__menu--list--item"><a href="#openModal">Contáctame</a></li>
                  </ul>
            </nav>
        </nav>
    <!-- Fin de Barra de Navegación -->
        <!-- Header -->
        <header class="header">
              <picture class="header__picture">
                  <source
                  srcset="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.svg,
                  images/alex-ballera@2x.svg 2x">
                  <img
                  src="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.jpg"
                  srcset="http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera.svg,
                  http://localhost/wp-content/themes/twentyfifteen-child/images/alex-ballera@2x.svg 2x"
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