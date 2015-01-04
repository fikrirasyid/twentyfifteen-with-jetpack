<?php
/**
 * Theme setup
 * 
 * @return void
 */
function twentyfifteen_with_jetpack(){

	// Declaring site logo support
	add_image_size( 'site-logo', 0, 56 );
	add_theme_support( 'site-logo', array(
		'header-text' => array(
			'site-title',
			'site-description'
		),
		'size' => 'site-logo',
	));	

}
add_action( 'after_setup_theme', 'twentyfifteen_with_jetpack' );