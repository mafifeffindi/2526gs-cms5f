<?php
// Register menu and sidebar, enqueue styles
function dewaweb_clone_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'dewaweb_clone_setup');

function dewaweb_clone_scripts(){
    wp_enqueue_style('dewaweb-main', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'dewaweb_clone_scripts');

// Register sidebar
function dewaweb_clone_widgets(){
    register_sidebar(array(
        'name' => 'Primary Sidebar',
        'id' => 'primary-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init','dewaweb_clone_widgets');
