<?php
function keren_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'keren-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'keren_theme_setup' );

function keren_enqueue_scripts() {
    // Tambah Google Fonts
    wp_enqueue_style( 'keren-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap', false );
    wp_enqueue_style( 'keren-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'keren_enqueue_scripts' );

function keren_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'keren-theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'keren_widgets_init' );
