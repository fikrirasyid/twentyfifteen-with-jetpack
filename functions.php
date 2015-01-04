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

/**
 * Adding custom field for theme's customizer
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twentyfifteen_with_jetpack_customize_register( $wp_customize ) {

	// Remove  header textcolor control
	$wp_customize->remove_control( 'display_header_text' );

}
add_action( 'customize_register', 'twentyfifteen_with_jetpack_customize_register' );