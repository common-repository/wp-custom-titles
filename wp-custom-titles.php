<?php
/*
Plugin Name: WP Custom Titles
Plugin URI: http://www.callum-macdonald.com/code/
Version: 0.1
Description: Add a custom field to a post or page with the name "custom_title" and that will appear as the posts's title (but not the navigation links, etc).
Author: Callum Macdonald
Author URI: http://www.callum-macdonald.com/
*/

add_filter('the_title', 'wpct_the_title', 9999);

if (!function_exists('wpct_the_title')):
function wpct_the_title($the_title) {

	// If we're not in the loop, do nothing
	if (!in_the_loop())
		return $the_title;

	global $post;

	$custom_title = get_post_meta($post->ID, 'custom_title', true);

	if (!empty($custom_title))
		return $custom_title;

	// If all else fails, return the passed in title
	return $the_title;

}
endif;
