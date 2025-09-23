<?php
// Pastikan tidak bisa diakses langsung
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Daftarkan CSS & JS
function mytheme_enqueue_scripts() {
    // Style utama
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Contoh: jika ada custom.css di /assets/css/
    wp_enqueue_style('mytheme-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0');

    // Contoh: jika ada custom.js di /assets/js/
    wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// 2. Daftarkan Menu Navigasi
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'mytheme'),
        'footer'    => __('Footer Menu', 'mytheme'),
    ));
}
add_action('init', 'mytheme_register_menus');

// 3. Tambahkan Fitur Theme Support
function mytheme_theme_support() {
    // Judul otomatis
    add_theme_support('title-tag');
    
    // Featured Image
    add_theme_support('post-thumbnails');

    // Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_theme_support');