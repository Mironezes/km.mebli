<?php
/**
 * km_mebli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @author Alexey Suprun
 * @package km_mebli
 */


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки темы',
		'menu_title' 	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}




if ( ! function_exists( 'km_mebli_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function km_mebli_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on km_mebli, use a find and replace
	 * to change 'km_mebli' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'km_mebli', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'km_mebli' ),
	) );
	register_nav_menus( array(
		'menu-2' => esc_html__( 'Main', 'km_mebli' )
	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'km_mebli_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'km_mebli_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function km_mebli_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'km_mebli_content_width', 640 );
}
add_action( 'after_setup_theme', 'km_mebli_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function km_mebli_widgets_init() {

}
add_action( 'widgets_init', 'km_mebli_widgets_init' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');






/**
 * Enqueue scripts and styles.
 */
function km_mebli_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.min.css' );	
	wp_enqueue_style( 'carousel-css', get_template_directory_uri(). '/vendors/owl-carousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'carousel-theme-css', get_template_directory_uri(). '/vendors/owl-carousel/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri(). '/vendors/fontawesome/css/all.min.css' );
	wp_enqueue_style( 'new-style', get_template_directory_uri(). '/css/style.css' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(),  true );	

	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(),  true );	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(),  true );	

	wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() . '/vendors/fontawesome/js/all.min.js', array(),  true );	
	wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', array(),  true );	

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'),  true );	
}
add_action( 'wp_enqueue_scripts', 'km_mebli_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


