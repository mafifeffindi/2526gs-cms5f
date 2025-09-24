<?php
// Load CSS & JS
function corporate_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'corporate_theme_assets');

// Register menu
function corporate_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'corporate-theme'),
    ));
}
add_action('after_setup_theme', 'corporate_theme_setup');
?>
