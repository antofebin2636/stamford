<?php
// ***********************************************************************//
// Images
// ***********************************************************************//

// Images: Add Featured Images Support
add_theme_support('post-thumbnails');

// Images: Add custom featured image sizes
if (function_exists('add_image_size')) {
	add_image_size('square', 300, 300, true);
	add_image_size('full-page', 2560, 1440, true);
}

// Images: Get SVG content 
// Example: get_svg('images/example.svg')
function get_svg($image){
	if (file_exists(TEMPLATEPATH . '/' . $image)) {
	echo file_get_contents(TEMPLATEPATH . '/' . $image);
	} else {
		echo 'Could not find ' . TEMPLATEPATH . '/' . $image;
	}
}