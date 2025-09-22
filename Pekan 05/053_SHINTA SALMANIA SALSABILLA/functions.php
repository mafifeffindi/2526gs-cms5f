<?php
// Enqueue style utama
function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Tambahkan dukungan fitur theme
function mytheme_setup() {
    // Judul otomatis di <title>
    add_theme_support('title-tag');

    // Post thumbnail (featured image)
    add_theme_support('post-thumbnails');

    // Registrasi menu navigasi
    register_nav_menus(array(
        'primary' => __('Menu Utama', 'myfirsttheme'),
        'footer'  => __('Menu Footer', 'myfirsttheme')
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Register Sidebar / Widget Area
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Utama', 'myfirsttheme'),
        'id'            => 'main-sidebar',
        'description'   => __('Sidebar yang tampil di sebelah kanan.', 'myfirsttheme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');
