<?php
// FUNCTIONS.PHP - AdventureTrail

if ( ! function_exists('adventuretrail_setup') ) {
  function adventuretrail_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('hero-large', 1600, 800, true);
    add_image_size('card-medium', 600, 400, true);
    add_image_size('thumb-small', 150, 100, true);

    register_nav_menus(array(
      'main-menu' => __('Main Menu', 'adventuretrail')
    ));

    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  }
}
add_action('after_setup_theme', 'adventuretrail_setup');

// Enqueue styles and scripts
function adventuretrail_enqueue_assets() {
  wp_enqueue_style('adventuretrail-googlefonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Dancing+Script:wght@600&display=swap', array(), null);
  wp_enqueue_style('adventuretrail-main', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
  wp_enqueue_script('adventuretrail-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
  // For older browsers support optional:
  // wp_enqueue_script('adventuretrail-polyfill', 'https://unpkg.com/es6-promise/auto.min.js', array(), null);
}
add_action('wp_enqueue_scripts', 'adventuretrail_enqueue_assets');

// Widget area
function adventuretrail_widgets_init() {
  register_sidebar(array(
    'name' => __('Sidebar', 'adventuretrail'),
    'id' => 'sidebar-1',
    'before_widget' => '<aside class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'adventuretrail_widgets_init');
