#sc-form-parent-<?php echo $val->id;?> {
	width: <?php if($param['form_width'] == ""){echo "100"; } else{ echo $param['form_width'];} ?><?php if($param['form_width_par'] == "" || $param['form_width_par'] == "pr"){echo "%"; } else{ echo "px";} ?>;
	<?php if(empty($param['form_align'] ) || $param['form_align'] == "left"){echo "margin: 0;"; }
	else if ($param['form_align'] == "center") {echo "margin:0 auto;";}else {echo "margin-left: auto;";} ?>	
}
#sc-form-<?php echo $val->id;?> {
padding: 10px  10px;
background: <?php if($param['form_background_color'] == ""){echo "#eeeeee";}else{echo $param['form_background_color'];}?>; 
margin: 10px 10px;
border: <?php if(empty($param['form_border'])){echo "0";}else{echo $param['form_border'];}?>px solid <?php if(empty($param['form_border_color'])){echo "#ffffff";}else{echo $param['form_border_color'];}?>;
border-radius: <?php if(empty($param['form_border_radius'])){echo "0";}else{echo $param['form_border_radius'];}?>px;
overflow:hidden;
text-align:<?php echo $param['form_align'];?>;

}
#sc-form-<?php echo $val->id;?> input[type=button]{
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
-webkit-appearance: none;
-moz-box-sizing: border-box; 
box-sizing: border-box;

}
#sc-form-<?php echo $val->id;?> input[type=button]:hover { 
cursor: pointer; 
background: <?php if($param['button_hover_color'] == ""){echo "#444444";}else{echo $param['button_hover_color'];}?>; 
}
#sc-form-<?php echo $val->id;?> input[type=text]{ 
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
#sc-form-<?php echo $val->id;?> input[type=text]{ height:<?php if($param['height_input'] == ""){echo "36";}else{echo $param['height_input'];}?>px; line-height: <?php if($param['height_input'] == ""){echo "36";}else{echo $param['height_input'];}?>px; }
#sc-form input[type=text]::-webkit-input-placeholder {
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sc-form-<?php echo $val->id;?> input[type=text]:-moz-placeholder { /* Firefox 18- */
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sc-form-<?php echo $val->id;?> input[type=text]::-moz-placeholder {  /* Firefox 19+ */
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sc-form-<?php echo $val->id;?> input[type=text]:-ms-input-placeholder {
color: <?php if($param['field_placeholder_color'] == ""){echo "#777777";}else{echo $param['field_placeholder_color'];}?>;
}
#sc-result-<?php echo $val->id;?> {
	text-align:<?php if($param['text_position'] == ""){echo "left";}else{echo $param['text_position'];}?>;
}
.wplg-col {

width: 100%;
float: left;	
	min-height: 1px;	
	white-space: normal;
	box-sizing: initial;
	}  
.wplg-col-8, .wplg-col-4 {
	float: left;
	white-space: normal;
	display: inline-block;
  vertical-align: middle;
      
  }    

.wplg-col-8 {width: 63.34%; padding: 0 1.665%;}
.wplg-col-4 {width: 30%; padding: 0 1.665%;}
#sc-result-<?php echo $val->id;?>{	
	text-align:center;
	margin-bottom:13px;	
}
@media only screen and (max-width: <?php if($param['screen_size'] == ""){echo "1024";}else{echo $param['screen_size'];}?>px){
#sc-form-parent-<?php echo $val->id;?> {
    width: <?php if($param['mobile_width'] == ""){echo "85"; } else{ echo $param['mobile_width'];} ?><?php if($param['mobile_width_par'] == "" || $param['mobile_width_par'] == "pr"){echo "%"; } else{ echo "px";} ?>;
}
}