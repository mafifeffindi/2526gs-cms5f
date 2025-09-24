<?php
/**
 * Hospa functions and definitions
 * @package Hospa
 */


/**
 * Shorthand contents for theme assets url
 */
define('HOSPA_VERSION', time());
define('HOSPA_THEME_URI', get_template_directory_uri());
define('HOSPA_THEME_DIR', get_template_directory());
define('HOSPA_IMG',HOSPA_THEME_URI . '/assets/img');
define('HOSPA_CSS',HOSPA_THEME_URI . '/assets/css');
define('HOSPA_JS',HOSPA_THEME_URI . '/assets/js');
if( !defined('HOSPA_FRAMEWORK_VAR') ) define('HOSPA_FRAMEWORK_VAR', 'hospa_opt');

/**
 * Sets up theme defaults and registers support for various WordPress features.
*/
if ( ! function_exists( 'hospa_setup' ) ) :

	function hospa_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'hospa', HOSPA_THEME_DIR. '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_image_size( 'hospa_standard_card', 800, 530, true );
		add_image_size( 'hospa_card_612x518', 612, 518, true );
		add_image_size( 'hospa_card_112x115', 112, 115, true );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		remove_theme_support( 'widgets-block-editor' );
	}
endif;
add_action( 'after_setup_theme', 'hospa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
*/
function hospa_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'hospa_content_width', 640 );
}
add_action( 'after_setup_theme', 'hospa_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
require HOSPA_THEME_DIR . '/inc/enqueue.php';

if ( ! function_exists( 'hospa_fonts' ) ) {
	function hospa_fonts() {
		wp_enqueue_style( 'hospa-figtree', "//fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap", '', '1.0.0', 'screen' );
	}
}
add_action( 'wp_enqueue_scripts', 'hospa_fonts' );

/**
 * Custom template tags for this theme.
 */
require HOSPA_THEME_DIR. '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require HOSPA_THEME_DIR. '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require HOSPA_THEME_DIR. '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require HOSPA_THEME_DIR. '/inc/jetpack.php';
}

/**
 * Load bootstrap navwalker 
 */
require HOSPA_THEME_DIR. '/inc/bootstrap-navwalker.php';

/**
 * Load theme widgets
 */
require HOSPA_THEME_DIR. '/inc/widget.php';

/**
 * Custom style
 */
require HOSPA_THEME_DIR. '/inc/custom-style.php';

/**
 * Recommended plugin
*/
require get_parent_theme_file_path( '/inc/tgmpa/tgmpa.php' );

// Admin pages.
if ( is_admin() ) {
	include_once get_template_directory() . '/inc/hospa-dashboard/et-admin.php';
}
/**
 * Theme's filters and actions
*/
require HOSPA_THEME_DIR . '/inc/filter_actions.php';

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require HOSPA_THEME_DIR . '/inc/woocommerce.php';
}

/**
 * Admin dashboard style and scripts
 */
add_action( 'admin_enqueue_scripts', function() {
    global $pagenow;
    wp_enqueue_script( 'hospa-admin', HOSPA_JS .'/hospa-admin.js', array('jquery'), '1.0.0', true );
    if ( $pagenow == 'admin.php' ) {
		wp_enqueue_style( 'hospa-admin-dashboard', HOSPA_CSS .'/admin-dashboard.min.css' );
    }
});


/**
 * Undocumented function
 *
 * @return void
 */
function hospa_enqueue_scripts() {
	wp_enqueue_style(
		'hospa-admin-styles',
		get_template_directory_uri() . '/inc/hospa-dashboard/css/admin-pages.css',
		array(),
		time()
	);
}
add_action( 'admin_enqueue_scripts', 'hospa_enqueue_scripts' );

/**
 * Undocumented function
 *
 * @return void
 */
function hospa_dashboard_submenu_page() {

	if(!function_exists('hospa_init')) {
		add_menu_page(
			esc_html__( 'Hospa', 'hospa' ),
			esc_html__( 'Hospa', 'hospa' ),
			'manage_options',
			'hospa-dashboard',
			'',
			get_template_directory_uri() . '/assets/img/favicon.png',
			2
		);
	}
	
	add_submenu_page(
		'hospa',
		esc_html__( 'Hospa Dashboard', 'hospa' ),
		esc_html__( 'Hospa Dashboard', 'hospa' ),
		'manage_options',
		'hospa-dashboard',
		'hospa_screen_welcome'
	);
}
add_action( 'admin_menu', 'hospa_dashboard_submenu_page' );

/**
 * Undocumented function
 *
 * @return void
 */
function hospa_screen_welcome() {
	echo '<div class="wrap" style="height:0;overflow:hidden;"><h2></h2></div>';
	require_once get_parent_theme_file_path( '/inc/hospa-dashboard/welcome.php' );
}

/**
 * Undocumented function
 *
 * @return void
 */
function hospa_plugins_submenu_page() {

	add_submenu_page(
		'hospa',
		esc_html__( 'Hospa Install Plugins', 'hospa' ),
		esc_html__( 'Hospa Install Plugins', 'hospa' ),
		'manage_options',
		'hospa-admin-plugins',
		'hospa_screen_plugin'
	);

}
add_action( 'admin_menu', 'hospa_plugins_submenu_page' );

/**
 * Undocumented function
 *
 * @return void
 */
function hospa_screen_plugin() {
	echo '<div class="wrap" style="height:0;overflow:hidden;"><h2></h2></div>';
	require_once get_parent_theme_file_path( '/inc/hospa-dashboard/install-plugins.php' );
}
