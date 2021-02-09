

<?php
/**
 * smart_properties enqueue scripts
 *
 * @package smart_properties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Setup
add_action( 'after_setup_theme', 'smart_properties_setup' );

if (! function_exists('smart_properties_setup')) {
    function smart_properties_setup(){
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
	
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);		
    }
}


// Init
add_action('init', 'smart_properties_menu');


    function smart_properties_menu(){

		$location = array(
			'primary' => 'Header Menu',
			'footer' => 'Footer Menu'
		);

		register_nav_menus($location);
}



add_action( 'wp_enqueue_scripts', 'smart_properties_scripts' );
if ( ! function_exists( 'smart_properties_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function smart_properties_scripts() {
		// Styles
		$theme_version = wp_get_theme()->get( 'Version' );
		
		wp_enqueue_style( 'smart_properties-google-fonts-poppings',  'http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap', array(), '1.0', 'all' );
		wp_enqueue_style( 'smart_properties-google-fonts-hind',  'http://fonts.googleapis.com/css?family=Hind&display=swap', array(), '1.0', 'all' );
		
		$boostrap_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/style-starter.css' );
		wp_enqueue_style( 'smart_properties-bootstrap-css', get_template_directory_uri() . '/assets/css/style-starter.css',  array(), $boostrap_css_version, 'all' );
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/style.css' );
		wp_enqueue_style( 'smart_properties-css', get_template_directory_uri() . '/assets/css/style.css', array('smart_properties-bootstrap-css'), $css_version, 'all' );

 
	   // Scripts 
	   $js_version_2 = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/main.js' );
	    wp_enqueue_script( 'smart_properties-jquery-scripts-2', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), $js_version_2,  true );
		wp_enqueue_script( 'smart_properties-jquery-scripts','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
		wp_enqueue_script( 'smart_properties-popper-scripts', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
		wp_enqueue_script( 'smart_properties-bootstrap-scripts', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/js/main.js' );
		wp_enqueue_script( 'smart_properties-scripts', get_template_directory_uri() . '/assets/js/main.js', array('smart_properties-jquery-scripts'), $js_version,  true );
	
		// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		// 	wp_enqueue_script( 'comment-reply' );
		// }
		
	}

} // End of if function_exists( 'smart_properties_scripts' ).


// Post type
function custom_post_types(){

	$args = array(
	'labels' => array(
		'name' => 'Properties',
		'singular_name' => 'Property',
	),
	'hierarchical' => true,
	'menu_icon' => 'dashicons-admin-multisite',
	'public' => true,
	'has_archive' => true,
	'supports' => array('title', 'editor','thumbnail', 'custom-fields')
	);

	register_post_type('properties', $args);
}

add_action('init', 'custom_post_types');



// Post type
function custom_taxonomy(){

	$args = array(
	'labels' => array(
		'name' => 'Properties Types',
		'singular_name' => 'Property Type',
	),
	'hierarchical' => true,
	'public' => true,

	);

	register_taxonomy('property-types', 'properties', $args);
}

add_action('init', 'custom_taxonomy');




/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	require_once get_template_directory() . '/wp-bootstrap4.4-pagination.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }



	