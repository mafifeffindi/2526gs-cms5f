<?php
/** functions.php — basic theme setup and enqueue */


function aesthetic_soft_setup(){
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form','comment-form','gallery','caption'));
register_nav_menus(array('primary' => __('Primary Menu','aesthetic-soft')));
add_theme_support('custom-logo');
}
add_action('after_setup_theme','aesthetic_soft_setup');


function aesthetic_soft_enqueue(){
wp_enqueue_style('aesthetic-soft-style', get_stylesheet_uri(), array(), '1.0');
// Load Google Inter font (optional)
wp_enqueue_style('aesthetic-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', array(), null);
wp_enqueue_script('aesthetic-soft-script', get_template_directory_uri().'/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts','aesthetic_soft_enqueue');


// Widgets
function aesthetic_soft_widgets(){
register_sidebar(array(
'name'=>'Primary Sidebar',
'id'=>'sidebar-1',
'before_widget'=>'<div class="widget card">',
'after_widget'=>'</div>',
'before_title'=>'<h4>',
'after_title'=>'</h4>'
));
}
add_action('widgets_init','aesthetic_soft_widgets');