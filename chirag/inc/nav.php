<?php
/**
 * This file is display all Nav function in site.
 *
 * @package wordpress.
 */

/**
 * Register navigation menu and add theme support for menus.
 *
 * @return void
 */
function awm_active_website_management_theme_setup() {
	// Enable support for menus.
	add_theme_support( 'menus' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'header_menu'    => __( 'chirag_Header Menu', 'chirag' ),
			'footer_menu'    => __( 'chirag_Footer Menu', 'chirag' ),
		)
	);
}
add_action( 'after_setup_theme', 'awm_active_website_management_theme_setup' );
