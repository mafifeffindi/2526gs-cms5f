<?php
// Enqueue style dan script
function mytheme_enqueue_scripts() {
    // Load style.css
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Load JS custom (opsional)
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Register navigasi menu
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
        'footer'  => __('Footer Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Tambahkan support fitur WordPress
function mytheme_setup() {
    add_theme_support('title-tag');        // Judul otomatis
    add_theme_support('post-thumbnails');  // Featured image
    add_theme_support('custom-logo');      // Logo custom
}
add_action('after_setup_theme', 'mytheme_setup');