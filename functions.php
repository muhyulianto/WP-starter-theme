<?php
/**
 * BLM Basic Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blm_basic
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 780;
}


if ( ! function_exists( 'blm_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blm_theme_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// Add theme support for post thumbnails (featured images). 
	add_theme_support( 'post-thumbnails' );

	// Add theme support for menus
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Main Menu', 'blm_basic' ),
		'secondary' => esc_html__( 'Footer Menu', 'blm_basic' ),
		'social' 	=> esc_html__( 'Social Media', 'blm_basic' ),
	) );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

}
endif; // blm_theme_setup
add_action( 'after_setup_theme', 'blm_theme_setup' );


/**
 * Set up and register widget area
 */
require get_template_directory() . '/inc/widgets.php';


/**
 * Enqueue scripts and styles
 */
function blm_basic_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style('blm_googleFonts', '//fonts.googleapis.com/css?family=Inria+Serif&display=swap' );

	wp_enqueue_script( 'blm_navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
    wp_enqueue_script( 'blm_superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );
    
    wp_enqueue_script( 'blm_superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('jquery'), '20140328', true );
	
	wp_enqueue_script( 'blm_enquire', get_template_directory_uri() . '/js/enquire.min.js', false, '20140429', true );
	
	wp_enqueue_script( 'blm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blm_basic_scripts' );


// Custom post navigation and post meta for theme.
require get_template_directory() . '/inc/template-tags.php';



