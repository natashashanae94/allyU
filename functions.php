<?php
/**
 * Child Theme Functions 
 * thrive-nouveau-child/functions.php
 * Child theme functions.php
 * Put all your php script modifications here.
 *
 * @version  1.0
 */

/*Downloads jQuery to WordPress
function include_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery-3.4.1.min.js'), '', rand(111,9999), true);
	add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');*/

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
	
	}
	add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

 /*Loads the bootstrap and external css stylesheet to WordPress*/
 function load_stylesheets() {
	wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), rand(111,9999), 'all');
	wp_enqueue_style('style');
	
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false,'all');
    wp_enqueue_style('bootstrap');
 }
 add_action('wp_enqueue_scripts', 'load_stylesheets');


// Enqueue bootstrap.
add_action( 'wp_enqueue_scripts', 'thrive_nouveau_child_enqueue_bootstrap' );

// The child theme style.css.
add_action( 'wp_enqueue_scripts', 'thrive_nouveau_child_enqueue' );

/**
 * Re-enqeue bootstrap file. Not doing this would re-index our style.css ahead of bootstrap.
 * @return void
 *
 */

function thrive_nouveau_child_enqueue_bootstrap() {
	wp_enqueue_style( 'thrive-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array('thrive-google-font') );
}


/**
 * Actually enqueue our stylesheet.
 * @return void
 */
function thrive_nouveau_child_enqueue() 
{

	$parent_style = 'thrive-style';

	wp_enqueue_style( $parent_style, 
		get_template_directory_uri(). '/style.css'  );

	wp_enqueue_style( 'thrive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style, 'thrive-bootstrap' ),
        wp_get_theme()->get('Version')
    );

}

/*WordPress Admin Banner*/

if ( ! current_user_can( 'manage_options' ) ) {
	add_filter('show_admin_bar', '__return_false');
   }

/**
 * Allow text feilds to include shortcode references
 */
add_filter('widget_text','do_shortcode');

function my_allyu_terms ()
{
	echo "This is my_allyu_terms from functions.php in thrive-nouveau-child test";
}
add_shortcode('allyu_terms', 'my_allyu_terms');

function wpb_add_google_fonts() {
 
	wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css?family=EB+Garamond|Montserrat:300&display=swap", false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

/*Initiates Custom Logo Insertion in Header*/
function allyu_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'allyu_custom_logo_setup' );

function register_my_menus() {
	register_nav_menus(array(
		'additional-menu'=>__( 'Footer' ),
		'primary'=>__('AllyU-menu'),

	)

	);
}
	
add_action( 'init', 'register_my_menus' );

function my_scripts() {
	wp_register_script('my-script', get_theme_file_uri().'/script.js', false);
	wp_enqueue_script('my-script');
}
add_action('wp_enqueue_scripts', 'my_scripts');

?>
