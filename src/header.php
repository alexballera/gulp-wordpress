<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- START - Facebook Open Graph, Google+ and Twitter Card Tags 1.7 -->
    <meta name="author" content="Alex Ballera"/>
    <meta name="description" content="Ha emprendido negocios en diferentes sectores. Actualmente, crea sitios responsivos optimizados para móviles."/>
    <meta property="fb:app_id" content="586663831475504"/>
    <meta property="fb:admins" content="721354641"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:url" content="http://alexballera.com"/>
    <meta property="og:type" content="blog"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:image" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=400"/>
    <meta property="og:image:width" content="400"/>
    <meta property="og:image:height" content="254"/>
    <meta property="article:publisher" content="https://www.facebook.com/AlexBallera.Dev"/>
    <meta property="article:author" content="https://www.facebook.com/alexballera"/>
    <meta itemprop="name" content="<?php bloginfo('name'); ?>"/>
    <meta itemprop="headline" content="Front End Developer - Responsive Design - Mobile Optimization" />
    <meta itemprop="description" content="<?php bloginfo('description'); ?>"/>
    <meta itemprop="image" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=400"/>
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>
    <meta name="twitter:url" content="http://alexballera.com"/>
    <meta name="twitter:site" content="@alexballera"/>
    <meta name="twitter:creator" content="@alexballera"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>"/>
    <meta name="twitter:image:src" content="http://i2.wp.com/alexballera.com/wp-content/uploads/2016/02/alex-ballera.jpg?w=400"/>
    <link rel="canonical" href="http://alexballera.com"/>
    <link rel="publisher" href="https://plus.google.com/100946240394478170627"/>
    <link rel="author" href="https://plus.google.com/101028757520419920996"/>
    <!-- END - Facebook Open Graph, Google+ and Twitter Card Tags -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">
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
      Est&#225s usando  un  navegador <strong>desactualizado</strong>.
      Por favor <a  href="http://browsehappy.com/">actualiza  tu  navegador</a>
      Para  mejorar la  experiencia..
    </p>
    <![endif]-->
    <!-- Barra de Navegaci&#243n -->
        <nav id="header" class="nav">
            <div class="nav__mobile">
                  <a class="nav__mobile--logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
                      <li class="nav__menu--list--item"><a href="<?php echo esc_url( home_url( '/#responsive' ) ); ?>">Responsive</a></li>
                      <li class="nav__menu--list--item"><a href="<?php echo esc_url( home_url( '/#projects' ) ); ?>">Proyectos</a></li>
                      <li class="nav__menu--list--item"><a href="<?php echo esc_url( home_url( '/#articles' ) ); ?>">Art&#237culos</a></li>
                      <li class="nav__menu--list--item"><a href="#openModal">Cont&#225ctame</a></li>
                  </ul>
            </nav>
        </nav>
    <!-- Fin de Barra de Navegaci&#243n -->