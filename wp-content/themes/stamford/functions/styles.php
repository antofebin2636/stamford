<?php
// ***********************************************************************//
/* Styles

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

// Load the theme stylesheet from the CSS folder instead, datestamped to avoid refreshing cache
function shape_load_styles() {
	$timestamp = filemtime( get_template_directory() . '/dist/theme.css');
	wp_enqueue_style('frontend-stylesheet', get_template_directory_uri() . '/dist/theme.' . $timestamp . '.css', null, null);
    wp_enqueue_style('fontawesome-stylesheet', get_template_directory_uri() . '/dist/fontawesome/css/all.min.css', null, null);
	//wp_enqueue_style('frontend-google-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700', null, null);
}

add_action('wp_enqueue_scripts', 'shape_load_styles');


function shape_login_styles() {
	$timestamp = filemtime( get_template_directory() . '/dist/login.css');
	wp_enqueue_style('login-stylesheet', get_template_directory_uri() . '/dist/login.' . $timestamp . '.css', null, null);
}

add_action( 'login_enqueue_scripts', 'shape_login_styles' );

// ***********************************************************************//
// Widont function to remove widows from titles
// ***********************************************************************//
function widont($str = '')
{
	$str = rtrim($str);
	$space = strrpos($str, ' ');
	if ($space !== false)
	{
		$str = substr($str, 0, $space).'&nbsp;'.substr($str, $space + 1);
	}
	return $str;
}

add_filter('the_title', 'widont');
add_filter('single_term_title', 'widont');

// Make WYSIWYG use the same stylesheet
// add_editor_style('dist/site.css');