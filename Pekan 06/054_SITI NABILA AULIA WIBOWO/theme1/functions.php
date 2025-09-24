<?php
function cvnabila_enqueue_assets() {
    wp_enqueue_style('cvnabila-style', get_stylesheet_uri());
    wp_enqueue_script('cvnabila-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'cvnabila_enqueue_assets');
