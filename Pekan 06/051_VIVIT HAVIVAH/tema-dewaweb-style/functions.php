<?php
// functions.php
if (!defined('ABSPATH')) exit;

function ddws_enqueue_assets(){
    // style (style.css)
    wp_enqueue_style('ddws-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    // simple script for mobile menu (optional)
    wp_enqueue_script('ddws-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'ddws_enqueue_assets');

function ddws_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    register_nav_menus(array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','ddws_setup');

function ddws_widgets(){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'before_widget' => '<aside class="widget %2$s" id="%1$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init','ddws_widgets');
