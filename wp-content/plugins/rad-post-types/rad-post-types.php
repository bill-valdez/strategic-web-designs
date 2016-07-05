<?php
/*
Plugin Name: Custom Post Types - portfolios
Description: Adds portfolios to the site
Author: Melissa Cabral
Plugin URI: http://wordpress.melissacabral.com
Author URI: http://melissacabral.com
Version: 0.1
License: GPLv3
 */


/**
 * Create "portfolios" post type
 * @since  0.1
 */
add_action( 'init', 'rad_setup_portfolios' );
function rad_setup_portfolios(){
	register_post_type( 'portfolio', array(
			'public' 		=> true,
			'has_archive' 	=> true,
			'menu_position' => 5,
			'menu_icon'		=> 'dashicons-cart',
			'supports' 		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'labels' 		=> array(
				'name' => 'portfolios pieces',
				'singular_name' => 'portfolio piece',
				'add_new_item' 	=> 'Add New portfolio piece',
				'not_found'		=> 'No portfolios found',
				),
		) );
	
	// //add the Brand taxonomy to portfolios
	// register_taxonomy( 'brand', 'portfolio', array(
	// 	'hierarchical' 	=> true,  //checklist interface, can have parent/child terms
	// 	'labels' 		=> array(
	// 			'name' 			=> 'Brands',
	// 			'singular_name' => 'Brand',
	// 			'search_items'	=> 'Search Brands',
	// 			'add_new_item' 	=> 'Add New Brand',
	// 		),
	// ) );
	// //add the Feature taxonomy to portfolios
	// register_taxonomy( 'feature', 'portfolio', array(
	// 	'hierarchical' 	=> false,  //comma-separated interface, flat list
	// 	'labels' 		=> array(
	// 			'name' 			=> 'Features',
	// 			'singular_name' => 'Feature',
	// 			'search_items'	=> 'Search Features',
	// 			'add_new_item' 	=> 'Add New Feature',
	// 		),
	// ) );


}

/**
 * Fix permalink 404 errors when the plugin activates
 * @since  0.1
 */
function rad_rewrite_flush(){
	rad_setup_portfolios(); //call the func that registers CPT/Taxos
	flush_rewrite_rules(); //re-create the .htaccess rules
}
register_activation_hook( __FILE__, 'rad_rewrite_flush' );
