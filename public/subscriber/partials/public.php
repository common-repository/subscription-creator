<?php if ( ! defined( 'ABSPATH' ) ) exit; 
if(empty($param['mail_send_error_size'])){
	$errsize = "16"; 
}
else{
	$errsize = $param['mail_send_error_size'];
}
if(empty($param['mail_send_error_text'])){
	$errtext = "Correct the fields, please"; 
}
else{
	$errtext = $param['mail_send_error_text'];
}
if(empty($param['mail_send_error_color'])){
	$errcolor = "#ff0000"; 
}
else {
	$errcolor = $param['mail_send_error_color'];
}
if(empty($param['field_button'] )){
	$field_button = "Send"; 
}
else{
	$field_button = $param['field_button'];
}	
$form = '';

if($param['form_style'] == 'inline'){
	if (!empty($param['include_field_name']) && !empty($param['include_field_mail'])){
		$colom = '4';
	}
	else {
		$colom = '8';
	}
	$form .= '<div id="sc-form-parent-'.$val->id.'"><div id="sc-form-'.$val->id.'"><div id="sc-confirm-'.$val->id.'" class="wplg-col">';	
	if (!empty($param['include_field_name']) ){
		$form .= '<div class="wplg-col-'.$colom.'"><input class="sc-name" type="text" placeholder="'.$param['field_name'].'"></div>';		
	}
	if (!empty($param['include_field_mail']))
		$form .= '<div class="wplg-col-'.$colom.'"><input class="sc-email" type="text" placeholder="'.$param['field_mail'].'"></div>';	
	$form .= '<div class="wplg-col-4"><div style="width:100%;text-align:center;overflow:hidden;"><input type="button" onclick="scsend('.$val->id.','.$errsize.',\''.$errtext.'\',\''.$errcolor.'\');" value="'.$field_button.'" id="sc-button-'.$val->id.'"></div></div>';
	$form .= '</div><div id="sc-result-'.$val->id.'"></div>';
	$form .= '</div></div>';
	
}

else {
	$form .= '<div id="sc-form-parent-'.$val->id.'"><div id="sc-form-'.$val->id.'"><div id="sc-confirm-'.$val->id.'">';	
	if (!empty($param['include_field_name']) )
		$form .= '<input class="sc-name" type="text" placeholder="'.$param['field_name'].'">';
	if (!empty($param['include_field_mail']))
		$form .= '<input class="sc-email" type="text" placeholder="'.$param['field_mail'].'">';
	$form .= '<div id="sc-result-'.$val->id.'"></div>';
	$form .= '<div style="width:100%;text-align:center;overflow:hidden;"><input type="button" onclick="scsend('.$val->id.','.$errsize.',\''.$errtext.'\',\''.$errcolor.'\');" value="'.$field_button.'" id="sc-button-'.$val->id.'"></div>';
	$form .= '</div></div></div>';	
	
}
	 
	 

		 
echo $form; 
?>