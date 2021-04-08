<?php
/**
 * bizwhoop functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizwhoop
 */

	$bizwhoop_theme_path = get_template_directory() . '/inc/ansar/';

	require( $bizwhoop_theme_path . '/bizwhoop-custom-navwalker.php' );
	require( $bizwhoop_theme_path . '/font/font.php');
	require( $bizwhoop_theme_path . '/icon-functions.php');
	/*-----------------------------------------------------------------------------------*/
	/*	Enqueue scripts and styles.
	/*-----------------------------------------------------------------------------------*/
	require( $bizwhoop_theme_path .'/enqueue.php');
	/* ----------------------------------------------------------------------------------- */
	/* Customizer */
	/* ----------------------------------------------------------------------------------- */
	
	require( $bizwhoop_theme_path . '/customize/bizwhoop_customize_homepage.php');
	require( $bizwhoop_theme_path . '/customize/bizwhoop_customize_copyright.php');
	require( $bizwhoop_theme_path . '/customize/bizwhoop_customize_header.php');
	require( $bizwhoop_theme_path . '/customize/class-alpha-color-control/class-alpha-color-control.php');
	
	
	/*
	 * Load customize pro
	*/
	require_once( trailingslashit( get_template_directory() ) . 'inc/ansar/customize-pro/class-customize.php' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bizwhoop_setup() {
	
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bizwhoop, use a find and replace
	 * to change 'bizwhoop' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bizwhoop', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	//Custom logo
	add_theme_support( 'custom-logo', array(
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array( 'site-title', 'site-description' ),
			
		) );
	

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

	//Added selective refresh for widget
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary menu', 'bizwhoop' ),
		'social' => __( 'Social Links Menu', 'bizwhoop' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the woocommerce feature.
    add_theme_support( 'woocommerce');

    // Woocommerce Gallery Support
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'bizwhoop_setup' );


function bizwhoop_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

	}

	add_filter('get_custom_logo','bizwhoop_logo_class');


function bizwhoop_logo_class($html){
	
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	return $html;
	}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bizwhoop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizwhoop_content_width', 640 );
}
add_action( 'after_setup_theme', 'bizwhoop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bizwhoop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Widget Area', 'bizwhoop' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="bizwhoop-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'bizwhoop' ),
		'id'            => 'footer_widget_area',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 bizwhoop-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
	
	
}
add_action( 'widgets_init', 'bizwhoop_widgets_init' );
/*-----------------------------------------------------------------------------------*/
/*  Media Upload
/*-----------------------------------------------------------------------------------*/
//Get slider excerpt
function bizwhoop_get_slider_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 100);		
		$len=strlen($excerpt);	 
		if($original_len>200) {
		$excerpt = $excerpt;
		return $excerpt . '<div><a href="' . esc_url(get_permalink()) . '" class="btn btn-theme margin-bottom-10">'.__("Read More","bizwhoop").'</a></div>';
		}
		else
		{ return $excerpt; }
	}
	
//Get service excerpt
function bizwhoop_get_service_excerpt()
	{
		global $post;
		$excerpt = get_the_content();
		$excerpt = strip_tags(preg_replace(" (\[.*?\])",'',$excerpt));
		$excerpt = strip_shortcodes($excerpt);		
		$original_len = strlen($excerpt);
		$excerpt = substr($excerpt, 0, 60);		
		$len=strlen($excerpt);	 
		if($original_len>100) {
		$excerpt = $excerpt;
		return $excerpt . '<div><a href="' . esc_url(get_permalink()) . '" class="btn btn-theme margin-bottom-10">'.__("Read More","bizwhoop").'</a></div>';
		}
		else
		{ return $excerpt; }
	}	

the_tags();

function bizwhoop_enqueue_customizer_controls_styles() {
  wp_register_style( 'bizwhoop-customizer-controls', get_template_directory_uri() . '/css/customizer-controls.css', NULL, NULL, 'all' );
  wp_enqueue_style( 'bizwhoop-customizer-controls' );
  }
add_action( 'customize_controls_print_styles', 'bizwhoop_enqueue_customizer_controls_styles' );

//Read more Button on slider & Post
function bizwhoop_read_more() {
	
	global $post;
	
	$readbtnurl = '<div class="content-more"><a class="btn btn-theme" href="' . esc_url(get_permalink()) . '">'.__('Read More','bizwhoop').'</a></div>';
	
    return $readbtnurl;
}
add_filter( 'the_content_more_link', 'bizwhoop_read_more' );

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Fire the wp_body_open action.
	 *
	 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
	 *
	 * @since Twenty Nineteen 1.4
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 *
		 * @since Twenty Nineteen 1.4
		 */
		do_action( 'wp_body_open' );
	}
endif;