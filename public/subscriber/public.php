<?php if ( ! defined( 'ABSPATH' ) ) exit;

//* Subscriber shortcode
add_shortcode('Subscribtion', 'show_subscriber_creator_form');
function show_subscriber_creator_form($atts) {
    extract(shortcode_atts(array('id' => ""), $atts));		
    global $wpdb;
	$table = $wpdb->prefix . "wpbiker_tool";    
    $sSQL = $wpdb->prepare("select * from $table WHERE id = %d", $id);
    $arrresult = $wpdb->get_results($sSQL); 	
    if (count($arrresult) > 0) {
        foreach ($arrresult as $key => $val) {
			$param = unserialize($val->param);
			ob_start();
			include( 'partials/public.php' );
			$form=ob_get_contents();
			ob_end_clean();			
			$path_style = WPSC_PLUGIN_DIR.'/asset/subscriber/css/style-'.$val->id.'.css';
			$file_style = WPSC_PLUGIN_DIR.'/admin/partials/subscriber/generator/style.php';			
			if (file_exists($file_style) && !file_exists($path_style)){
				ob_start();
				include ($file_style);
				$content_style = ob_get_contents();
				ob_end_clean();
				file_put_contents($path_style, $content_style);
			}			
			if (file_exists($path_style)) {				
				wp_enqueue_style( 'sg-form-'.$val->id, WPSC_PLUGIN_URL.'asset/subscriber/css/style-'.$val->id.'.css', array(), WPSC_VERSION);
			}
        }
		wp_enqueue_script( 'sc-send', plugin_dir_url( __FILE__ ) . 'js/send.js', array( 'jquery' ), WPSC_VERSION);
		wp_localize_script( 'sc-send', 'send_sc_form', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		
    } else {		
		echo "<p><strong>No Records</strong></p>";        
    }  
		
	return $form;
}