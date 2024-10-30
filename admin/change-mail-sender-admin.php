<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
	/**
	 * Filter to change default functionality
	 *
	 * @package change sender name
	 * @since 1.0.0
	 */
	

function ch_mail_send_sender_email( $original_email_address ) {
	$admin_email = get_option('admin_email');
    return $admin_email; 
}
 
// Function to change sender name  
function ch_mail_send_sender_name( $original_email_from ) {
	$site_name  = get_bloginfo( 'name' );
    return $site_name;
	
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'ch_mail_send_sender_email' );
add_filter( 'wp_mail_from_name', 'ch_mail_send_sender_name' );    

	

 