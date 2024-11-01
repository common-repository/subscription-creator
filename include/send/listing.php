<?php
 $form_name = $val->title;
 $table_users = $wpdb->prefix . "wpbiker_users";
 $name= $_POST['name'];
 $email= $_POST['email'];
 if(empty($name)){
	 $name = 'Anonymus';
 }
 if(empty($email)){
	 $email = 'anonymus@example.com';
 }
 $wpdb->insert(
 $table_users,
	array( 'name' => $name, 'email' => $email, 'form_name' => $form_name,  )
);
?>
