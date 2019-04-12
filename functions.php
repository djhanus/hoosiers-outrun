<?php

// theme init
function enqueue_parent_styles() {
  wp_register_style('hoosiers-style',  get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
  wp_enqueue_script('toggle-script',  get_stylesheet_directory_uri() .'/js/toggle-faq.js', false, null, true);
  wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_enqueue_script('burger-script',  get_stylesheet_directory_uri() .'/js/burger.js', false, null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// add acf options page
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// register menus
function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __('Primary')
    )
  );
}
add_action('init', 'register_menus');


?>