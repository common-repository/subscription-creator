<?php

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
if (empty($param['field_name'])){
	$field_name = 'Your name';
}
else {
	$field_name = $param['field_name'];
}


$preview = '';

if($param['form_style'] == 'inline'){
	if (!empty($param['include_field_name']) && !empty($param['include_field_mail'])){
		$colom = '4';
	}
	else {
		$colom = '8';
	}
	$preview .= '<div id="sg-form-parent"><div id="sg-form"><div id="sg-confirm" class="wplg-col">';
	
	if (!empty($param['include_field_name']) ){
		$preview .= '<div class="wplg-col-'.$colom.'"><input class="sg-name" type="text" placeholder="'.$param['field_name'].'"></div>';		
	}
	if (!empty($param['include_field_mail']))
		$preview .= '<div class="wplg-col-'.$colom.'"><input class="sg-email" type="text" placeholder="'.$param['field_mail'].'"></div>';
	
	$preview .= '<div class="wplg-col-4"><div style="width:100%;text-align:center;overflow:hidden;"><input type="button" onclick="sgsend('.$errsize.',\''.$errtext.'\',\''.$errcolor.'\');" value="'.$field_button.'" id="sg-button"></div></div>';
	$preview .= '</div><div id="sg-result"></div></div>';
	$preview .= '</div>';
	
}
else {
	$preview .= '<div id="sg-form-parent"><div id="sg-form"><div id="sg-confirm">';
	
	if (!empty($param['include_field_name']) )
		$preview .= '<input class="sg-name" type="text" placeholder="'.$param['field_name'].'">';
	if (!empty($param['include_field_mail']))
		$preview .= '<input class="sg-email" type="text" placeholder="'.$param['field_mail'].'">';
	$preview .= '<div id="sg-result"></div>';
	$preview .= '<div style="width:100%;text-align:center;overflow:hidden;"><input type="button" onclick="sgsend('.$errsize.',\''.$errtext.'\',\''.$errcolor.'\');" value="'.$field_button.'" id="sg-button"></div>';
	$preview .= '</div></div></div>';
	
}

echo $preview;

?>
<style>

#sg-form-parent {
	width: <?php if($param['form_width'] == ""){echo "100"; } else{ echo $param['form_width'];} ?><?php if($param['form_width_par'] == "" || $param['form_width_par'] == "pr"){echo "%"; } else{ echo "px";} ?>;
	<?php if(empty($param['form_align'] ) || $param['form_align'] == "left"){echo "margin: 0;"; }
	else if ($param['form_align'] == "center") {echo "margin:0 auto;";}else {echo "margin-left: auto;";} ?>	
}

#sg-form {
padding: 10px  10px;
background: <?php if($param['form_background_color'] == ""){echo "#eeeeee";}else{echo $param['form_background_color'];}?>; 
margin: 10px 0;
border: <?php if(empty($param['form_border'])){echo "0";}else{echo $param['form_border'];}?>px solid <?php if(empty($param['form_border_color'])){echo "#ffffff";}else{echo $param['form_border_color'];}?>;
border-radius: <?php if(empty($param['form_border_radius'])){echo "0";}else{echo $param['form_border_radius'];}?>px;
overflow:hidden;
text-align:<?php echo $param['form_align'];?>;

}
#sg-form input[type=button]{
display: inline-block;
color: <?php if($param['button_text_color'] == ""){echo "0";}else{echo $param['button_text_color'];}?>; 
border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
-moz-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
-o-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
-webkit-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
border: none; 
background: <?php if($param['button_background_color'] == ""){echo "#a03717";}else{echo $param['button_background_color'];}?>;
width: <?php if($param['button_width_par'] == "px"){echo $param['form_button_width'].'px';} else if ($param['button_width_par'] == "pr"){echo $param['form_button_width'].'%';}else{echo "auto";}?>;
height:<?php if($param['height_input'] == ""){echo "36";}else{echo $param['height_input'];}?>px;
<?php if($param['button_position'] == "left"){echo "float: left;";}else if ($param['button_position'] == "right"){echo "float: right;";}else{echo "margin: 0 auto;";}?>
text-decoration: none;
font-size: <?php if($param['button_size'] == ""){echo "16";}else{echo $param['button_size'];}?>px;
-webkit-appearance: none;
}
#sg-form input[type=button]:hover { 
cursor: pointer; 
background: <?php if($param['button_hover_color'] == ""){echo "#444444";}else{echo $param['button_hover_color'];}?>; 
}
#sg-form input[type=text]{ 
background: <?php if($param['field_background_color'] == ""){echo "#fcfcfc";}else{echo $param['field_background_color'];}?>; border: <?php if($param['field_border'] == ""){echo "1";}else{echo $param['field_border'];}?>px solid <?php if($param['field_border_color'] == ""){echo "#cecece";}else{echo $param['field_border_color'];}?>; 
padding: 10px; 
display: block; 
font-size: <?php if($param['font_size'] == ""){echo "15";}else{echo $param['font_size'];}?>px; 
color: <?php if($param['field_text_color'] == ""){echo "#555555";}else{echo $param['field_text_color'];}?>; 
border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; -moz-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; -o-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; -webkit-border-radius: <?php if($param['field_border_radius'] == ""){echo "0";}else{echo $param['field_border_radius'];}?>px; 
text-align:<?php echo $param['text_position'];?>;
width: 100%; 
-moz-box-sizing: border-box; 
box-sizing: border-box; 
<?php if($param['form_style'] == 'colom'){echo 'margin-bottom: 13px;';};?>
 
}
#sg-form input[type=text]{ height:<?php if($param['height_input'] == ""){echo "36";}else{echo $param['height_input'];}?>px; line-height: <?php if($param['height_input'] == ""){echo "36";}else{echo $param['height_input'];}?>px; }
#sg-form input[type=text]::-webkit-input-placeholder {
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sg-form input[type=text]:-moz-placeholder { /* Firefox 18- */
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sg-form input[type=text]::-moz-placeholder {  /* Firefox 19+ */
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sg-form input[type=text]:-ms-input-placeholder {
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
.wplg-col {

width: 100%;
float: left;	
	min-height: 1px;	
	white-space: normal;
	
	}  
.wplg-col-8, .wplg-col-4 {
	float: left;
	white-space: normal;
	display: inline-block;
  vertical-align: middle;
      box-sizing: initial;
  }    

.wplg-col-8 {width: 63.34%; padding: 0 1.665%;}
.wplg-col-4 {width: 30%; padding: 0 1.665%;}
#sg-result{
	margin-bottom:13px;
	text-align:center;
	
}
</style>

<script>
jQuery(document).ready(function($) {
	$('input').keypress(function(e){
		if(e.keyCode==13){			
			$('#sg-button').trigger('click');
		}
	});     
});
function sgsend(errsize,errtext,errcolor) {	
	var buttid = 'sg-confirm';	
	var result = 'sg-result';	
	var countname = jQuery("#" + buttid +" .sg-name").length;
	var countemail = jQuery("#" + buttid +" .sg-email").length;
	var countphone = jQuery("#" + buttid +" .sg-phone").length;
	var errorcontent = '<span style="color:'+errcolor+';font-size:'+errsize+'px;">'+errtext+'</span>';
	var name = jQuery("#" + buttid +" .sg-name").val();
	var email = jQuery("#" + buttid +" .sg-email").val();	
	jQuery("#" + buttid + " .sg-name").removeAttr('style');
	jQuery("#" + buttid + " .sg-phone").removeAttr('style');
	jQuery("#" + buttid).removeAttr('style');	
	if ( name == '' && countname == 1){		
        jQuery("#" + buttid +" .sg-name").css({"border-color": errcolor});
        jQuery("#" + buttid +" .sg-name").focus();
		jQuery("#" + buttid).css({"margin-bottom": "13px"});
		jQuery('#'+result).html(errorcontent);	
		return false;		
    } 
	if ( email == '' && countemail == 1){
        jQuery("#" + buttid +" .sg-email").css({"border-color": errcolor});
        jQuery("#" + buttid +" .sg-email").focus();
		jQuery("#" + buttid).css({"margin-bottom": "13px"});
		jQuery('#'+result).html(errorcontent);
		return false;
	} 
	if ( email != '' && countemail == 1){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(email)){
			jQuery("#" + buttid + " .sg-email").removeAttr('style');
		} 
		else {
			jQuery("#" + buttid +" .sg-email").css({"border-color": errcolor});
			jQuery("#" + buttid +" .sg-email").focus();
			jQuery("#" + buttid).css({"margin-bottom": "13px"});
			jQuery('#'+result).html(errorcontent);
			return false;
            }
	}		
	if ( phone == '' && countphone == 1){	
        jQuery("#" + buttid +" .sg-phone").css({"border-color": errcolor});
        jQuery("#" + buttid +" .sg-phone").focus();
		jQuery('#'+result).html(errorcontent);
		return false;
	} 
			
	else {		
		var primsg = jQuery("#confirmation").val();
		var timer = jQuery("#timer").val();
		
		jQuery('#'+result).html('');
		jQuery('#sg-confirm').html(primsg);
		setTimeout(function(){jQuery("#sg-form").toggle();}, timer*1000);
	}
}

</script>
