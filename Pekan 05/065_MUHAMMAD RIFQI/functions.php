<?php
// Tambahkan dukungan fitur theme
function nama_theme_setup() {
    // Dukung Title Tag otomatis
    add_theme_support( 'title-tag' );

    // Dukung Post Thumbnail (Featured Image)
    add_theme_support( 'post-thumbnails' );

    // Daftarkan Menu Navigasi
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'nama-theme-kamu' ),
    ) );
}
add_action( 'after_setup_theme', 'nama_theme_setup' );

// Enqueue Styles & Scripts
function nama_theme_scripts() {
    // Load style.css utama
    wp_enqueue_style( 'nama-theme-style', get_stylesheet_uri() );

    // (Opsional) Tambahkan JavaScript
    // wp_enqueue_script( 'nama-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'nama_theme_scripts' );
// Daftar widget area
function nama_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'nama-theme-kamu' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Sidebar utama di sebelah kanan.', 'nama-theme-kamu' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'nama_theme_widgets_init' );
