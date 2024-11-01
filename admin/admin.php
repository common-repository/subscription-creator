<?php 
	defined( 'ABSPATH' ) or die( "No script kiddies please!" );
	//* Add page in admin menu
	add_action('admin_menu', 'add_subscriber_creator_menu');
	function add_subscriber_creator_menu() {
		add_menu_page( WPSC_NAME, WPSC_NAME, 'manage_options', WPSC_BASENAME, 'subscriber_creator', 'dashicons-groups' );		
		add_action('admin_print_styles', 'wpbiker_script_style');
	}
	
	//* Include scripts & styles on admin page
	function subscriber_creator() {
		global $wpbiker;
		$wpbiker = true;	
		include_once( 'partials/subscriber.php' );	
		wp_enqueue_style( 'font-awesome', WPSC_PLUGIN_URL . 'asset/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );	
		wp_enqueue_script( 'subscriber-creator', plugin_dir_url(__FILE__) . 'js/script.js', array( 'jquery' ));
		wp_enqueue_style( 'data-table', plugin_dir_url(__FILE__) . 'css/data_style.css');	
		wp_enqueue_script( 'data-table', plugin_dir_url(__FILE__) . 'js/dataTables.js', array( 'jquery' ));
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('wp-color-picker');
		wp_enqueue_script( 'wp-color-picker-alpha', plugin_dir_url(__FILE__) . 'js/wp-color-picker-alpha.js', array( 'wp-color-picker' ));
		
	}
	
	
	//* Include main scripts & styles
	if ( ! function_exists ( 'wpbiker_script_style' ) ) {
		function wpbiker_script_style() {
			wp_enqueue_style('wpbiker-style', plugin_dir_url(__FILE__) . 'css/style.css');
			
		}
	}
	
	//* Save all parametrs in the database
	if ( ! function_exists ( 'wpbiker_chek' ) ) {
		function wpbiker_chek(){
			if ( !empty($_POST) && wp_verify_nonce($_POST['wpbiker_nonce_field'],'wpbiker_action') && current_user_can('manage_options')){
				wpbikerclass();
			}
		}
		add_action( 'plugins_loaded', 'wpbiker_chek' );
		function wpbikerclass(){
			global $wpdb;
			$objItem = new WPBIKERDATA();
			$addtool = (isset($_REQUEST["addtool"])) ? sanitize_text_field($_REQUEST["addtool"]) : '';
			$table_name = $wpdb->prefix . "wpbiker_tool";
			$page = sanitize_text_field($_REQUEST["page"]);
			$id = sanitize_text_field($_POST['id']);
			$post = array();
			foreach ($_POST as $key => $value){
				if (is_array($value) == true){
					$post[$key] = serialize($value);
				}
				else {
					$post[$key] = $value;
				}
			}
			if (isset($_POST["submit"])) {
				if (sanitize_text_field($_POST["addtool"]) == "1") {
					$objItem->addNewItem($table_name, $post);
					header("Location:admin.php?page=".$page."&info=saved");
					exit;
				} 
				else if (sanitize_text_field($_POST["addtool"]) == "2") {
					$objItem->updItem($table_name, $post);
					header("Location:admin.php?page=".$page."&tool=add&act=update&id=".$id."&info=update");
					exit;
				}
			}
		}
	}
	//* Footer text
	if ( ! function_exists ( 'wpbiker_plugins_admin_footer_text' ) ) {
		function wpbiker_plugins_admin_footer_text( $footer_text ) {
			global $wpbiker;
			if ( $wpbiker == true ) {
				$rate_text = sprintf( '<span id="footer-thankyou">Developed by  <a href="https://profiles.wordpress.org/wpbiker" target="_blank">wpbiker</a></span>  | <a href="https://www.facebook.com/wowaffect/" target="_blank" title="Join us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href="https://wow-estore.com/en/affiliates/" target="_blank" title="MAKE MONEY WITH US"><i class="fa fa-money" aria-hidden="true"></i></a>'
				);
				return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
			}
			else {
				return $footer_text;
			}
		}
		add_filter( 'admin_footer_text', 'wpbiker_plugins_admin_footer_text' );
	}	