<?php
// Load CSS & Google Fonts
function moderntheme_enqueue() {
    wp_enqueue_style('modern-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap', false);
    wp_enqueue_style('modern-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'moderntheme_enqueue');

// Theme setup
function moderntheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Menu Utama', 'moderntheme'),
        'footer'  => __('Menu Footer', 'moderntheme')
    ));
}
add_action('after_setup_theme', 'moderntheme_setup');

// Sidebar
function moderntheme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Utama', 'moderntheme'),
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'moderntheme_widgets_init');
