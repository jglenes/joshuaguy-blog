<?php
/**
 * Roots child custom functions
 */

// Show less info to users on failed login for security. (Won't let a valid username be known)
function show_less_login_info()
{ 
	return "<strong>ERROR</strong>: What's wrong, don't remember? Try again...";
}

// Don't generate and display WordPress version
function no_generator() 
{ 
	return ''; 
}

add_filter( 'the_generator', 'no_generator' );	
add_filter( 'login_errors', 'show_less_login_info' );

function roots_child_setup() {

	// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
	set_post_thumbnail_size(9999, 250, false);
	//add_image_size('wide', 600, 300);
	//add_image_size('tall', 300, 600);

	remove_filter( 'excerpt_more', 'roots_excerpt_more' );

	// Add post formats (http://codex.wordpress.org/Post_Formats)
	// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action('after_setup_theme', 'roots_child_setup');

// override roots_excerpt_more
function roots_child_excerpt_more($more) {
  	return '&hellip; <a class="btn more-btn" href="' . get_permalink() . '">' . __('Read Moar!', 'roots_child') . '</a>';
}

add_filter('excerpt_more', 'roots_child_excerpt_more');

?>