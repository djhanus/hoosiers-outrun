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

    <!-- FAQ Toggle Script -->
    <script type="text/javascript">
    function toggle(obj) {
    // Moz. or IE
    var sibling=(obj.nextSibling.nodeType==3)? obj.nextSibling.nextSibling : obj.nextSibling;
    // hide or show
    if(sibling.style.display=='' || sibling.style.display=='block') {
      sibling.style.display='none';
        obj.firstChild.firstChild.data='+';
        }
    else {
      sibling.style.display='block';
        obj.firstChild.firstChild.data='-';
        }
    }
    //
    function initCollapse() {
    var oDT=document.getElementById('content').getElementsByTagName('dt');
    for (var i=0; i < oDT.length; i++) {
      oDT[i].onclick=function() {toggle(this)};
        var oSpan=document.createElement('span');
        var sign=document.createTextNode('+');
        oSpan.appendChild(sign);
        oDT[i].insertBefore(oSpan, oDT[i].firstChild);
        oDT[i].style.cursor='pointer';
        toggle(oDT[i]);
      }
    oDT=null;
    }
    window.onload=function() {if(document.getElementById && document.createElement) {initCollapse();}}
    //-->
    </script>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <header>

    <div class="container">

      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_field('logo', 'options') ?>"></a>

      <div class="main-menu-container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
      </div>

    </div> <!-- /.container -->
  </header>
<main>