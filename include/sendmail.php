<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
if( defined('DOING_AJAX') && DOING_AJAX ){
	add_action( 'wp_ajax_send_sc_form', 'send_sc_form' );
	add_action( 'wp_ajax_nopriv_send_sc_form', 'send_sc_form' );
}
function send_sc_form() {
	$id = $_POST['id'];
	global $wpdb;
	$table = $wpdb->prefix . "wpbiker_tool";    
    $sSQL = "select * from $table WHERE id=$id";
    $result = $wpdb->get_results($sSQL);
	if (count($result) > 0) {
		foreach ($result as $key => $val) {
			$param = unserialize($val->param);
			include ('send/admin.php');
			include ('send/listing.php');			
		}
	}
	exit();
	}
?>