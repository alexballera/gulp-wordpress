<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/101028757520419920996">
    <link rel="publisher" href="https://plus.google.com/100946240394478170627"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php bloginfo('name'); ?>">
    <meta itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta itemprop="image" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=200">
    <meta property="og:image" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=200" />
    <meta property="fb:admins" content="721354641" />

     <!-- Twitter Card data: Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@alexballera" />
    <meta name="twitter:creator" content="@alexballera">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:image:src" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=200">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">

    <!-- Mobile Optimization -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- img Icon -->
      <link rel="shortcut icon" href="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/touch-icon-iphone.png?fit=57%2C57" />
      <link rel="apple-touch-icon" href="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/touch-icon-iphone.png?fit=57%2C57" />
      <link rel="apple-touch-icon" sizes="72x72" href="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/touch-icon-ipad.png?fit=72%2C72" />
      <link rel="apple-touch-icon" sizes="114x114" href="http://i1.wp.com/alexballera.com/wp-content/uploads/2016/02/touch-icon-iphone-retina.png?fit=114%2C114" />
      <link rel="apple-touch-icon" sizes="152x152" href="http://i1.wp.com/alexballera.com/wp-content/uploads/2016/02/touch-icon-ipad-retina.png?w=152">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.min.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>..twentyfifteen/js/html5.js"></script>
  <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  </head>
  <body>
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
                  <a class="nav__mobile--logo" href="<?php bloginfo('url'); ?>/#">
                    <picture class="nav__mobile--logo--picture">
                      <source
                      srcset="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=451,
                      http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera@2x.jpg?w=903 2x">
                      <img
                      src="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=451"
                      srcset="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=451,
                      http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera@2x.jpg?w=903 2x"
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