<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$tool = (isset($_REQUEST["tool"])) ? sanitize_text_field($_REQUEST["tool"]) : '';
include_once( 'subscriber/menu.php' );
if ($tool  == "add"){
	include_once( 'subscriber/add.php' );	
}
if ($tool  == ""){
	include_once( 'subscriber/list.php' );
}
if ($tool  == "subscribers"){
	include_once( 'subscriber/subscribers.php' );	
}
if ($tool  == "pro"){
	include_once( 'subscriber/pro.php' );	
}
if ($tool  == "items"){
	include_once( 'subscriber/items.php' );	
}
?>
</div>
