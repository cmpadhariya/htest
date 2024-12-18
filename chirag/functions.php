<?php
/**
 * This is our functions file
 *
 * @package WordPress
 */

 /**
 * This import file in enqueue file for include inside this file add enqueue function for site.
 */
require_once 'inc/enqueue.php';

/**
 * This import file in enqueue file for include inside this file add nav function for site.
 */
require_once 'inc/nav.php';

/**
 * This file imports all template functions.
 */
require_once 'inc/template-functions.php';


function awm_enqueue_assets() {
	// Main CSS File
	// wp_enqueue_style(
	// 	'awm-main-style', // Unique handle name
	// 	get_template_directory_uri() . '/assets/css/main.css', // Path to main.css
	// 	array() // Dependencies (optional)
	// );

	wp_enqueue_style( 'awm-style', get_template_directory_uri() . '/assets/css/library/bootstrap.min.css', array(), 'all' );


	// Splide CSS File
	wp_enqueue_style(
		'awm-splide-style', // Unique handle name for Splide CSS
		get_template_directory_uri() . '/assets/css/library/splide-bundle.min.css', // Path to Splide CSS
		array() // Dependencies (optional)
	);

	// Splide JS File
	wp_enqueue_script(
		'awm-splide-script',
		get_template_directory_uri() . '/assets/js/splide-bundle.min.js',
		array( 'jquery' ), // Dependencies
	);

	// Custom Script JS File
	wp_enqueue_script(
		'awm-custom-script', // Unique handle name for custom script
		get_template_directory_uri() . '/assets/js/script.js', // Path to script.js
		array( 'jquery' ), // Dependencies
	);
}
add_action( 'wp_enqueue_scripts', 'awm_enqueue_assets' );

