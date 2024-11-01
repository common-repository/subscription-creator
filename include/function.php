<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );

//* Link on plugin setting
function plugin_subscriber_creator_action_links( $actions, $plugin_file ){
	if( false === strpos( $plugin_file, basename(__FILE__) ) )
		return $actions;

	$settings_link = '<a href="admin.php?page=subscribers-creator' .'">Settings</a>'; 
	array_unshift( $actions, $settings_link ); 
	return $actions; 
}
add_filter( 'plugin_action_links', 'plugin_subscriber_creator_action_links', 10, 2 );

//* Check access to folder 'asset'
function plugin_subscriber_creator_asset(){
	$filename = WPSC_PLUGIN_DIR.'asset';
	if (!is_writable($filename)) {
		add_action('admin_notices', 'plugin_subscriber_creator_asset_notice' );
	} 
}
add_filter( 'admin_init', 'plugin_subscriber_creator_asset');

//* Notice if no access
function plugin_subscriber_creator_asset_notice(){
	$path = WPSC_PLUGIN_DIR.'asset';
    echo "<div class='error' id='message'><p>".__("Please set the 775 access rights (chmod 775) for the '".$path."' folder.", "wow-marketings")."</p> </div>";
}