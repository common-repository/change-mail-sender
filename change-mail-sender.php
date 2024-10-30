<?php
/*
Plugin Name: Change Mail Sender 
Plugin URI: #
Description: Change Mail Sender automatically addes Site name as Sender name in outgoing emals.
Version: 1.0.0
Author: pratik27
Author URI:#
*/    

/**
 * Basic plugin definitions 
 * 
 * @package change mail sender 
 * @since 1.1.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

global $wpdb; 

if( !defined( 'CH_MAIL_SEND_DIR' ) ) {
	define( 'CH_MAIL_SEND_DIR', dirname( __FILE__ ) ); // plugin dir
}
if( !defined( 'CH_MAIL_SEND_URL' ) ) {
	define( 'CH_MAIL_SEND_URL', plugin_dir_url( __FILE__ ) ); // plugin url
}
if( !defined( 'CH_MAIL_SEND_DOMAIN' )) {
	define( 'CH_MAIL_SEND_DOMAIN', 'CH_MAIL_SEND' ); // text domain for languages
}
if( !defined( 'CH_MAIL_SEND_PLUGIN_URL' ) ) {
	define( 'CH_MAIL_SEND_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); // plugin url
}
if( !defined( 'CH_MAIL_SEND_ADMIN_DIR' ) ) {
	define( 'CH_MAIL_SEND_ADMIN_DIR', CH_MAIL_SEND_DIR . '//admin' ); // plugin admin dir
}
if( !defined( 'CH_MAIL_SEND_BASENAME') ) {
	define( 'CH_MAIL_SEND_BASENAME', 'cust-li-fi' );
}
//subtitle prefix
if( !defined( 'CH_MAIL_SEND_META_PREFIX' )) {
	define( 'CH_MAIL_SEND_META_PREFIX', '_CH_MAIL_SEND_' );
}

/**
 * Load Text Domain
 * 
 * This gets the plugin ready for translation.
 * 
 * @package change mail sender 
 * @since 1.1.0
 */
load_plugin_textdomain( 'CH_MAIL_SEND', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/**
 * Activation hook
 * 
 * Register plugin activation hook.
 * 
 * @package change mail sender 
 * @since 1.1.0
 */
register_activation_hook( __FILE__, 'CH_MAIL_SEND_install' );

/**
 * Deactivation hook
 *
 * Register plugin deactivation hook.
 * 
 * @package change mail sender 
 * @since 1.1.0
 */
register_deactivation_hook( __FILE__, 'CH_MAIL_SEND_uninstall' );

/**
 * Plugin Setup Activation hook call back 
 *
 * Initial setup of the plugin setting default options 
 * and database tables creations.
 * 
 * @package change mail sender 
 * @since 1.1.0
 */
function CH_MAIL_SEND_install() {
	
	global $wpdb;
		
}

/**
 * Plugin Setup (On Deactivation)
 *
 * Does the drop tables in the database and
 * delete  plugin options.
 *
 * @package change mail sender 
 * @since 1.1.0
 */
function CH_MAIL_SEND_uninstall() {
	
	global $wpdb;
			
}
/**
 * Includes
 *
 * Includes all the needed files for our plugin
 *
 * @package change mail sender 
 * @since 1.1.0
 */ 

//includes model class file

require_once ( CH_MAIL_SEND_ADMIN_DIR . '/change-mail-sender-admin.php');

