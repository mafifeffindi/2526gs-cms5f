<?php
function bakery_theme_assets() {
    // CSS
    wp_enqueue_style('bakery-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap', false);

    // JS
    wp_enqueue_script('bakery-script', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'bakery_theme_assets');
?>
