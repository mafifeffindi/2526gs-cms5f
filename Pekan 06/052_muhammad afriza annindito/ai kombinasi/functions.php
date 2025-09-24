<?php
// Daftarkan menu navigasi
function genai_register_menu() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('init', 'genai_register_menu');

// Enqueue stylesheet
function genai_enqueue_styles() {
    wp_enqueue_style('genai-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'genai_enqueue_styles');
