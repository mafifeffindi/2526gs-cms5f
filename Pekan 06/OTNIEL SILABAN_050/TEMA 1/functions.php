<?php
/**
 * Otnielfy theme functions and definitions
 */

if ( ! function_exists( 'otnielfy_setup' ) ) :
    function otnielfy_setup() {
        // i18n
        load_theme_textdomain( 'otnielfy', get_template_directory() . '/languages' );

        // Title tag
        add_theme_support( 'title-tag' );

        // Post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Custom logo
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 320,
            'flex-height' => true,
            'flex-width'  => true,
        ) );

        // HTML5 support
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );

        // Register nav menu
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'otnielfy' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'otnielfy_setup' );

// Enqueue styles and scripts
function otnielfy_scripts() {
    wp_enqueue_style(
        'otnielfy-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_template_directory() . '/style.css' )
    );

    wp_enqueue_script(
        'otnielfy-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array( 'jquery' ),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'otnielfy_scripts' );

// Register widget area
function otnielfy_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'otnielfy' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Tambahkan widget di sini.', 'otnielfy' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'otnielfy_widgets_init' );
