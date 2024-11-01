<?php
	global $wpdb;
	$data = $wpdb->prefix . "wpbiker_tool";
	$data_users = $wpdb->prefix . "wpbiker_users";
	$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
	if ($info == "saved") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wplg-sc")."</strong>.</p></div>";
	}
	if ($info == "update") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wplg-sc")."</strong>.</p></div>";
	}
	if ($info == "del") {
		$delid = $_GET["did"];
		$wpdb->query("delete from " . $data . " where id=" . $delid);
		echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wplg-sc").".</strong>.</p></div>";
	}
	if ($info == "mail") {
		$delid = $_GET["did"];
		$wpdb->query("delete from " . $data_users . " where id=" . $delid);
		echo "<div class='updated' id='message'><p><strong>".__("Subscriber Deleted", "wplg-sc").".</strong>.</p></div>";
	}	
	$resultat = $wpdb->get_results("SELECT * FROM " . $data . " WHERE tool='subscriber' order by id asc");	
	$resusers = $wpdb->get_results("SELECT * FROM " . $data_users . " order by id desc");	
?>
<div class="wpbiker">
	<h1 class="wp-heading-inline"><?php esc_attr_e(WPSC_NAME, "wplg-sc") ?> <a href='https://www.facebook.com/wowaffect/' target="_blank" title="Join us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href='https://wow-estore.com/en/affiliates/' target="_blank" title="MAKE MONEY WITH US"><i class="fa fa-money" aria-hidden="true"></i></a></h1>
	<ul class="wpbiker-admin-menu">
		<li><a href='admin.php?page=<?php echo WPSC_BASENAME; ?>'><?php esc_attr_e("List", "wplg-sc") ?></a></li>	
		<li><a href='admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=add' ><?php esc_attr_e("Add new", "wplg-sc") ?></a></li>
		<li><a href='admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=subscribers' ><?php esc_attr_e("Subscribers", "wplg-sc") ?></a></li>		
		<li><a href='admin.php?page=<?php echo WPSC_BASENAME; ?>&tool=pro' ><?php esc_attr_e("Pro Version", "wplg-sc") ?></a></li>
	</ul>
<hr class="wp-header-end">