<?php


add_filter( 'body_class', function( $classes ) {

	if ( is_singular( ['post', 'page'] ) ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}

	return $classes;

});