<?php
// ***********************************************************************//
// Add Basic Menus
// ***********************************************************************//
function register_my_menus() {
	
	register_nav_menus(array(
		'header_menu' => 'Header Menu',
 		'footer_menu' => 'Footer Menu',
        'header_title_menu' => 'Header Title Menu'
	));
}

add_action('init', 'register_my_menus');

// ***********************************************************************//
// ACF Add Global Options
// ***********************************************************************//
if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Site Details',
		'menu_title' 	=> 'Site Details',
		'menu_slug' 	=> 'site-details',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}