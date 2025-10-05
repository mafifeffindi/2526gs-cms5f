<?php
// Memuat style dan script
function mytheme_enqueue_scripts() {
    // Load style utama
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Load custom CSS
    wp_enqueue_style('mytheme-custom', get_template_directory_uri() . '/assets/css/custom.css');

    // Load JS
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Registrasi Menu
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Utama', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Registrasi Sidebar/Widget Area
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Utama', 'mytheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Area widget untuk sidebar.', 'mytheme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');
