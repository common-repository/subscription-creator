<?php 
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
global $wpdb;
$table = $wpdb->prefix . 'wpbiker_tool';
$table_users = $wpdb->prefix . 'wpbiker_users';
$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
$sql = "CREATE TABLE {$table} (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,  
  tool TEXT,
  param TEXT,  
  UNIQUE KEY id (id)
) {$charset_collate};";
dbDelta($sql);

$sql_users = "CREATE TABLE {$table_users} (
  id mediumint(9) NOT NULL AUTO_INCREMENT,   
  name TEXT,
  email TEXT, 
  form_name TEXT,
  param TEXT,  
  UNIQUE KEY id (id)
) {$charset_collate};";
dbDelta($sql_users);