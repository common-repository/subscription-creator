<?php 
/**
 * Plugin Name:       Subscription Creator
 * Plugin URI:        
 * Description:       Easily create a subscribe form with any style
 * Version:           1.0
 * Author:            wpbiker
 * Author URI:        https://codecanyon.net/user/wpbiker?ref=wpbiker
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wplg-sc
  */
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

//* Plugin's constants
if ( ! defined( 'WPSC_NAME' ) ) {
	define( 'WPSC_NAME', "Subscription Creator");
	define( 'WPSC_VERSION', "1.0");
	define( 'WPSC_BASENAME', dirname(plugin_basename(__FILE__)) );	
	define( 'WPSC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
	define( 'WPSC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

//* Activate plugin
function activate_plugin_subscriber_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'include/activator.php';	
	}	
register_activation_hook( __FILE__, 'activate_plugin_subscriber_creator' );

//* Include functions for plugin
require_once plugin_dir_path( __FILE__ ) . 'include/function.php';

//* Include class for save info in the database
if( !class_exists( 'WPBIKERDATA' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/wpbikerdata.php';
}

//* Include JavaScript obfuscation library
if( !class_exists( 'JavaScriptPacker' )) {
	require_once plugin_dir_path( __FILE__ ) . 'include/class.JavaScriptPacker.php';
}

//* Include admin side
require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

//* Include function for public
require_once plugin_dir_path( __FILE__ ) . 'public/public.php';

//* Include sendmail function
require_once plugin_dir_path( __FILE__ ) . 'include/sendmail.php';
