<?php

// ***********************************************************************//
// Remove Hello Dolly
// ***********************************************************************//

function goodbye_dolly() {
	if (file_exists(WP_PLUGIN_DIR.'/hello.php')) {
		require_once(ABSPATH.'wp-admin/includes/plugin.php');
		require_once(ABSPATH.'wp-admin/includes/file.php');
		delete_plugins(array('hello.php'));
	}
}

add_action('admin_init','goodbye_dolly');

function goodbye_dolly_repo() {
	if (file_exists(WP_PLUGIN_DIR.'/hello-dolly/hello.php')) {
		require_once(ABSPATH.'wp-admin/includes/plugin.php');
		require_once(ABSPATH.'wp-admin/includes/file.php');
		delete_plugins(array('hello-dolly/hello.php'));
	}
}

add_action('admin_init','goodbye_dolly_repo');

// ***********************************************************************//
// Remove Akismet
// ***********************************************************************//
function goodbye_akismet() {
	if (file_exists(WP_PLUGIN_DIR.'/akismet/akismet.php')) {
		require_once(ABSPATH.'wp-admin/includes/plugin.php');
		require_once(ABSPATH.'wp-admin/includes/file.php');
		delete_plugins(array('akismet/akismet.php'));
	}
}

add_action('admin_init','goodbye_akismet');

// ***********************************************************************//
// Auto Install recommended PLugins
// ***********************************************************************//
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {

	$plugins = array(

		array(
			'name' => 'Custom Post Type UI',
			'slug' => 'custom-post-type-ui',
			'required' => false
			),
		array(
			'name' => 'Classic Editor',
			'slug' => 'classic-editor',
			'required' => false
		),	
		array(
			'name' => 'Advanced Custom Fields Pro',
			'slug' => 'advanced-custom-fields-pro',
			'source' => 'https://connect.advancedcustomfields.com/index.php?a=download&p=pro&k=b3JkZXJfaWQ9MzYwNDN8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE0LTA3LTI5IDEwOjUyOjM4',
			'required' => true,
			'external_url' => 'http://www.advancedcustomfields.com'
			),
		array(
			'name' => 'Yoast SEO',
			'slug' => 'wordpress-seo',
			'required' => false
			)
		);

	$config = array(
		'id'           => 'tgmpa',                
		'default_path' => '',                     
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',           
		'capability'   => 'edit_theme_options',   
		'has_notices'  => true,                   
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                     
		'is_automatic' => false,                  
		'message'      => '',                     

		);

	tgmpa( $plugins, $config );
}