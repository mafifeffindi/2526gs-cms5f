<?php
function tema_baru_enqueue_assets() {
  // load style.css
  wp_enqueue_style('tema-baru-style', get_stylesheet_uri());

  // load script.js
  wp_enqueue_script(
    'tema-baru-script',
    get_template_directory_uri() . '/script.js',
    array('jquery'),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'tema_baru_enqueue_assets');
