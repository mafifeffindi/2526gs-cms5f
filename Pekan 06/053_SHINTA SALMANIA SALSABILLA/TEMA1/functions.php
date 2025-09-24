<?php
/**
 * Pastel Theme functions
 */

// enqueue styles & fonts
function pastel_enqueue_assets(){
    // Google fonts
    wp_enqueue_style('pastel-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', array(), null);
    // main stylesheet
    wp_enqueue_style('pastel-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'pastel_enqueue_assets');

// theme support & menus
function pastel_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pastel-thumb', 1200, 700, true);
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pastel-theme'),
        'footer'  => __('Footer Menu', 'pastel-theme'),
    ));
}
add_action('after_setup_theme', 'pastel_setup_theme');

// register widget area
function pastel_register_sidebars(){
    register_sidebar(array(
        'name' => __('Main Sidebar', 'pastel-theme'),
        'id'   => 'main-sidebar',
        'description' => __('Primary sidebar that appears on the right.'),
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'pastel_register_sidebars');

// load theme textdomain (if you will translate)
function pastel_load_textdomain(){
    load_theme_textdomain('pastel-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'pastel_load_textdomain');
