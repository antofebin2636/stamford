<?php
// ***********************************************************************//
/* Scripts

These .htaccess rules are required to make the JS / CSS work. 
This is because it's using a query-less cache busting method.

Add them in if the css or the js stops working.

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)\.(\d+)\.(bmp|css|cur|gif|ico|jpe?g|m?js|png|svgz?|webp|webmanifest)$ $1.$3 [L]
</IfModule>

*/
// ***********************************************************************//

// Add function to enqueue extra scripts
add_action('wp_enqueue_scripts', 'shape_load_javascript_files');

// Register the scripts
function shape_load_javascript_files() {

	wp_deregister_script( 'jquery' );
	
	$timestamp = filemtime( get_template_directory() . '/dist/theme.js');
	
	wp_register_script('theme', get_template_directory_uri() . '/dist/theme.' . $timestamp . '.js', '', null, true);

	/* Pass AJAX URL through to script */
	wp_localize_script('theme', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	/* Pass theme URL through to script */
	$theme_uri = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
	wp_localize_script( 'theme', 'directory_uri', $theme_uri );

	wp_enqueue_script('theme');

}

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );