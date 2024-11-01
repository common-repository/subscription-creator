<?php if ( ! defined( 'ABSPATH' ) ) exit; 
$arr_modal = $wpdb->get_results("SELECT * FROM " . $data . " WHERE tool='subscriber' order by title asc");
$act = (isset($_REQUEST["act"])) ? $_REQUEST["act"] : '';
if ($act == "update") {
	$recid = $_REQUEST["id"];
	$result = $wpdb->get_row("SELECT * FROM $data WHERE id=$recid");
	if ($result){
        $id = $result->id;
        $title = $result->title;
		$param = unserialize($result->param);		
		$btn = __("Update", "wplg");
        $hidval = 2;
    }
}
else if ($act == "duplicate") {
	$recid = $_REQUEST["id"];
	$result = $wpdb->get_row("SELECT * FROM $table_mwp_modal WHERE id=$recid");
	if ($result){
        $id = "";
        $title = "";
		$param = unserialize($result->param);		
		$btn = __("Save", "wplg");
        $hidval = 1;
    }
}
 else {
    $btn = __("Save", "wplg");
    $id = "";
        $title = "";
		$param['include_field_name'] = '1';
		$param['field_name'] = '';
		$param['include_field_mail'] = '1';
		$param['field_mail'] = '';		
		$param['form_align'] = 'center';
		$param['form_width'] = '80';
		$param['form_width_par'] = 'pr';		
		$param['field_border'] = '1';
		$param['field_border_radius'] = '5';		
		$param['text_position'] = 'left';
		$param['height_input'] = '52';
		$param['field_button'] = '';
		$param['button_size'] = '16';
		$param['form_button_width'] = '250';
		$param['button_width_par'] = 'px';
		$param['button_position'] = 'right';
		$param['form_background_color'] = '#dd3333';
		$param['field_text_color'] = '#555555';
		$param['field_placeholder_color'] = '#777777';
		$param['field_border_color'] = '#eeeeee';
		$param['field_background_color'] = '#fcfcfc';
		$param['button_text_color'] = '#ffffff';
		$param['button_background_color'] = '#e95645';
		$param['button_hover_color'] = '#d45041';
		$param['screen_size'] = '';
		$param['mobile_width'] = '';
		$param['mobile_width_par'] = '';		
		$param['add_to_listing'] = '1';
		$param['mail_send_error_text'] = '';
		$param['mail_send_error_size'] = '';
		$param['mail_send_error_color'] = '';
		$param['mail_send_send_timer'] = '3';		
		$param['confirmation'] = 'Thank you. We will contact you shortly.';
		$param['form_border'] = '0';
		$param['form_border_radius'] = '0';
		$param['form_border_color'] = '#ffffff';
		$param['form_style'] = 'colom';
		$param['after_post_content'] = '';
		
    $hidval = 1;
}

$confsettings = array(
    'textarea_name' => 'param[confirmation]',
	'textarea_rows' => '',
	'wpautop' => 0,	
    'media_buttons' => true,	
    'tinymce' => array(
        'theme_advanced_buttons1' => 'formatselect,|,bold,italic,underline,|,' .
        'bullist,blockquote,|,justifyleft,justifycenter' .
        ',justifyright,justifyfull,|,link,unlink,|' .
        ',spellchecker,wp_fullscreen,wp_adv'
    )
);
?>