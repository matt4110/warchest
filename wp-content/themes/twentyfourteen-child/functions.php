<?php
/**
 * Twenty Fourteen Child Functions and Definitions
 */

 //Remove Auto Formatting!
//remove_filter('the_content', 'wpautop');

 //Add Custom Content Types

add_action( 'init', 'frontpage_cpt' );

function frontpage_cpt() {

register_post_type( 'FrontPage', array(
  'labels' => array(
    'name' => 'Front Page',
    'singular_name' => 'Front Page',
   ),
  'description' => 'Front Page custom content types.',
  'public' => true,
  'menu_position' => 17,
  'supports' => array( 'title' )
));
}


/*
add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {

	// add the file extension to the array

	$existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

	return $existing_mimes;

}
*/