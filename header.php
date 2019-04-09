<!DOCTYPE html>
<html class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6930216/7915992/css/fonts.css" />
    <link rel="stylesheet" href="https://use.typekit.net/xwl8ehg.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122241241-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122241241-1');
    </script>
    <!-- END GA Script -->

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header>

    <div class="container">

      <!-- Logo -->
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo', 'options') ?>"></a>

      <!-- Hamburger Button -->
      <div class="hamburger-wrapper">
        <div class="hamburger-menu"></div>
      </div>

      <!-- Desktop Menu -->
      <div class="main-menu-container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
      </div>

      <!-- Mobile Menu -->
      <div class="mobile-menu-wrapper">
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

        <div class="socials">
          <a href="<?php echo get_field('facebook_url', 'options'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="<?php echo get_field('twitter_url', 'options'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
          <a href="<?php echo get_field('instagram_url', 'options'); ?>" target="_blank"><i class="fab fa-instagram"></i></i></a>
        </div>
      </div>

    </div> <!-- /.container -->


  </header>
<main>