<?php
// Title otomatis
add_theme_support( 'title-tag' );

// Thumbnail post
add_theme_support( 'post-thumbnails' );

// Menu navigasi
function esthetica_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'esthetica' ),
    ) );
}
add_action( 'after_setup_theme', 'esthetica_register_menus' );

// Load style & script
function esthetica_enqueue_assets() {
    wp_enqueue_style( 'esthetica-style', get_stylesheet_uri() );
    wp_enqueue_script( 'esthetica-script', get_template_directory_uri() . '/js/script.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'esthetica_enqueue_assets' );

// Sidebar
function esthetica_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'esthetica' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'esthetica_widgets_init' );
