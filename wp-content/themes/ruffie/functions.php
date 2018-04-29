<?php
/**
	* Ruffie Functions
	*
	* This functions file contains the the mainly used features of a WordPress theme
	* Uncomment or delete lines as needed
	*
  * @package Ruffie
	* @since Ruffie 1.0
	*/

if ( ! function_exists( 'ruffie_setup' ) ) :
	/**
	* Initial theme setup
	*
	* @since Ruffie 1.0
	*/
	function ruffie_setup() {
		
		// Support for translation files
		load_theme_textdomain( 'ruffie', get_template_directory() . '/languages' );

		// Content width
		if ( ! isset( $content_width ) ) $content_width = 900;

		// Adds editor styles
		add_editor_style( array(
			'editor-style.css',
			str_replace( ',', '%2C', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,800italic,700italic,700,600italic,400italic,300italic,300' )
		) );

		/**
			* Enable support for Post Formats
			* @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Formats
			*/
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
			'chat'
		) );

		// Enables support for custom logo
		add_theme_support( 'custom-logo' );

		//Enable support for Post Thumbnails on posts, pages and more
		add_theme_support( 'post-thumbnails' );

		//Support for custom background settings
		add_theme_support( 'custom-background', array(
			'default-color'			 => '#ca2f2a',
		) );

		// Adds RSS feed in head
		add_theme_support( 'automatic-feed-links' );
		
		// Make core WordPress makup output valid HTML5
		add_theme_support( 'html5', array(
			'comment-list',
			'gallery',
			'caption',
		) );
		
		// <title> tag provided by WordPress
		add_theme_support( 'title-tag' );

		// wp_nav_menu() setup
		register_nav_menus( array(
			'header' => __('Header Menu', 'ruffie'),
			'footer' => __('Footer Menu', 'ruffie')
		));
	}
endif;
add_action( 'after_setup_theme', 'ruffie_setup' );

/**
	* Basic widget area structure
	*
	* @since Ruffie 1.0
	*/
function ruffie_widget_init(){
	register_sidebar( array(
		'name' 					=> __('Above Content Widget Area', 'ruffie'),
		'id' 						=> 'above-content-widget-area',
		'description'		=> __('Widget area above the content', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Left Sidebar Widget Area', 'ruffie'),
		'id' 						=> 'left-sidebar-widget-area',
		'description'		=> __('Widget area at the left side of the content', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Right Sidebar Widget Area', 'ruffie'),
		'id' 						=> 'right-sidebar-widget-area',
		'description'		=> __('Widget area at the right side of the content', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area One', 'ruffie'),
		'id' 						=> 'footer-widget-area-one',
		'description'		=> __('Widget area in the footer', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area Two', 'ruffie'),
		'id' 						=> 'footer-widget-area-two',
		'description'		=> __('Widget area in the footer', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area Three', 'ruffie'),
		'id' 						=> 'footer-widget-area-three',
		'description'		=> __('Widget area in the footer', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

	register_sidebar( array(
		'name' 					=> __('Footer Widget Area Four', 'ruffie'),
		'id' 						=> 'footer-widget-area-four',
		'description'		=> __('Widget area in the footer', 'ruffie'),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );

}
add_action( 'widgets_init', 'ruffie_widget_init' );

/**
	* Custom "Read more" on excerpts
	*
	* @since Ruffie 1.0
	*/
function ruffie_excerpt_read_more($more) {
	global $post;
	
	if( !get_theme_mod('read_more', true) ){
		return '... <a href="' . esc_url( get_permalink($post->ID) ) . '">' . __('Read more', 'ruffie') . '</a>';
	}else{
		return '...';
	}
}
add_filter('excerpt_more', 'ruffie_excerpt_read_more');

/**
	* Scripts, Styles and fonts
	*
	* @since Ruffie 1.0
	*/
function ruffie_scripts(){
	// Enqueue the font Open Sans from google
	wp_enqueue_style( 'ruffie-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,800italic,700italic,700,600italic,400italic,300italic,300', array(), null);

	// Enqueue Font Awesome (example icon set)
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), '4.6.3');

	// Enqueue style.css from root theme folder
	wp_enqueue_style( 'ruffie-style', get_stylesheet_uri() );

	// Enqueue theme JS and include jQuery
	wp_enqueue_script( 'ruffie-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), wp_get_theme()->get('Version'), true );

	// Comment-reply script
	if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ruffie_scripts' );

/**
	* Add classes to body depending on custom changes and content
	*
	* @since Ruffie 1.0
	*/
function ruffie_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-widget-area' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class related to the amount of footer widget areas
	$classes[] = 'footer-widget-areas-'.ruffie_footer_widget_area_counter();

	return $classes;
}
add_filter( 'body_class', 'ruffie_body_classes' );

/**
	* Add classes to posts depending on custom changes and content
	*
	* @since Ruffie 1.0
	*/
function ruffie_post_classes( $classes ) {
	// adds a class of archive-entry to looped layout posts with excerpts
	if( !is_singular() ){
		$classes[] =  'archive-entry';
	}

	return $classes;
}
add_filter( 'post_class', 'ruffie_post_classes' );

/**
	* Customized CSS options
	*
	* @since Ruffie 1.3.1
	*/
function ruffie_customize_styles(){
	$options = [
		esc_attr( get_theme_mod('border_color', '#191919') ),
		'#'.esc_attr( get_background_color() ),
		esc_attr( get_theme_mod('text_color', '#191919') ),
		esc_attr( get_theme_mod('link_color', '#191919') ),
		esc_attr( get_theme_mod('site_title_color', '#191919') ),
		esc_attr( get_theme_mod('tagline_color', '#191919') )
	];

	$css = '
		*,
		.sticky .archive-entry-header h3:before,
		.ruffie-labeler:not(old) + label:after{
			border-color: %1$s !important;
		}

		body,
		.header-menu-container,
		.header-menu .sub-menu{
			background-color: %2$s;
		}

		body,
		.header-menu-container,
		.header-menu .sub-menu,
		.header-menu a,
		.archive-entry-header a,
		.entry-meta a{
			color: %3$s;
		} 

		a{
			color: %4$s;
		}

		.site-title a{
			color: %5$s;
		}

		.site-tagline{
			color: %6$s;
		}
	';

	wp_add_inline_style( 'ruffie-style', vsprintf($css, $options) );
}
add_action( 'wp_enqueue_scripts', 'ruffie_customize_styles' );

/**
	* Included files
	* - Theme functions
	* - WP-Customize
	*
	* @since Ruffie 1.0
	*/
require get_template_directory() . '/inc/theme_functions.php';
require get_template_directory() . '/inc/customize.php';

?>