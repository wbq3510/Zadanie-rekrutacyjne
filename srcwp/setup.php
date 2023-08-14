<?php


/**
 * Set up theme defaults and registers support for various WordPress features.
 *
 * @author Freeshifter LLC
 * @since 1.0.0
 */
add_action( 'after_setup_theme', function () {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'wp-tailwind' ),
		'footer'  => __( 'Footer Menu', 'wp-tailwind' ),
	] );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );
	
} );

// Remove all default WP template redirects/lookups
remove_action( 'template_redirect', 'redirect_canonical' );

// Redirect all requests to index.php so the Vue app is loaded and 404s aren't thrown
function remove_redirects() {
	add_rewrite_rule( '^/(.+)/?', 'index.php', 'top' );
}
add_action( 'init', 'remove_redirects' );
// podstawowe pola do acf

function get_menu() {
    # Change 'menu' to your own navigation slug.
    return wp_get_nav_menu_items('główne');
}
add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );
function get_menu2() {
    # Change 'menu' to your own navigation slug.
    return wp_get_nav_menu_items('stopka');
}
add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/menustopka', array(
        'methods' => 'GET',
        'callback' => 'get_menu2',
    ) );
} );



function get_front() {
    # Change 'menu' to your own navigation slug.
    return get_option('page_on_front');
}

add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/front', array(
        'methods' => 'GET',
        'callback' => 'get_front',
    ) );
} );



function get_field_o($field){
    return get_field($field, 'options');
}

if( function_exists('acf_add_options_page') ) {
	$args = array(
    	'page_title' => 'Opcje strony',
    );
	acf_add_options_page($args);
	
}

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

