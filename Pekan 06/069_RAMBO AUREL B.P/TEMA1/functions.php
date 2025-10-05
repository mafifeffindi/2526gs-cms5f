<?php

/**
 * Mengatur skrip dan style yang dibutuhkan tema.
 */
function nama_tema_saya_scripts() {
    // Memuat stylesheet utama (style.css)
    wp_enqueue_style('nama-tema-saya-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nama_tema_saya_scripts');

/**
 * Mendaftarkan fitur tema
 */
function nama_tema_saya_features() {
    // Menambahkan dukungan untuk gambar thumbnail (Featured Image)
    add_theme_support('post-thumbnails');

    // Mendaftarkan satu menu navigasi
    register_nav_menus(
        array(
            'primary-menu' => __('Menu Utama', 'nama-tema-saya'),
        )
    );
}
add_action('after_setup_theme', 'nama_tema_saya_features');

/**
 * Mendaftarkan sidebar untuk area widget.
 */
function nama_tema_saya_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Utama', 'nama-tema-saya' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Tambahkan widget di sini untuk muncul di sidebar.', 'nama-tema-saya' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'nama_tema_saya_widgets_init' );

?>