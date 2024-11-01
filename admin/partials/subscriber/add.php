<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>
<form action="admin.php?page=<?php echo WPSC_BASENAME; ?>" method="post">
	<div class="wpbikercolom">
		<div id="wpbiker-leftcol">
			<div class="wpbiker-admin">
				<input placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-100 wpbiker-title"/>
			</div>
			<div class="wpbikerbox">
				<h3><?php esc_attr_e("Preview", "wplg-sc") ?></h3>
				<div style="display: block;">
					<?php include ('preview/preview.php'); ?>
				</div>
			</div>
			<div class="tab-box ">
				<ul class="tab-nav">
					<li><a href="#t1"><i class="fa fa-css3" aria-hidden="true"></i> <?php esc_attr_e("Style", "wplg-sc") ?></a></li>
					<li><a href="#t2"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <?php esc_attr_e("Form", "wplg-sc") ?></a></li>
					<li><a href="#t3"><i class="fa fa-mobile" aria-hidden="true"></i> <?php esc_attr_e("Mobile style", "wplg-sc") ?></a></li>
					<li><a href="#t4"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php esc_attr_e("Integration", "wplg-sc") ?></a></li>	
					<li><a href="#t5"><i class="fa fa-envelope" aria-hidden="true"></i> <?php esc_attr_e("Email settings", "wplg-sc") ?></a></li>
					<li><a href="#t6"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php esc_attr_e("Email to user", "wplg-sc") ?></a></li>
					<li><a href="#t7"><i class="fa fa-product-hunt" aria-hidden="true"></i> <?php esc_attr_e("Pro version", "wplg-sc") ?></a></li>
				</ul>
				<div class="tab-panels wpbiker-admin">
					<div id="t1" class="tab-content">
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form style", "wplg-sc") ?>: <br/>
								<input name="param[form_style]" type="radio" value="colom" <?php if($param['form_style']=='colom' || $param['form_style'] =='') { echo 'checked="checked"'; } ?>> Colom <input name="param[form_style]" type="radio" value="inline" <?php if($param['form_style']=='inline') { echo 'checked="checked"'; } ?>> Inline
							</div>
						</div>
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form align", "wplg-sc") ?>: <br/>
								<select name='param[form_align]'>
									<option value="left" <?php if($param['form_align']=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wplg-sc") ?></option>
									<option value="center" <?php if($param['form_align']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wplg-sc") ?></option>      
									<option value="right" <?php if($param['form_align']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wplg-sc") ?></option>
								</select>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form width", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="100" name='param[form_width]' value="<?php echo $param['form_width']; ?>"/> <br/> <input name="param[form_width_par]" type="radio" value="px" <?php if($param['form_width_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[form_width_par]" type="radio" value="pr" <?php if($param['form_width_par']=='pr' || $param['form_width_par'] =='') { echo 'checked="checked"'; } ?>>%
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form border", "wplg-sc") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_border]' value="<?php echo $param['form_border']; ?>"/> px
							</div>
							</div>	
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form border radius", "wplg-sc") ?>:<br/>
								<input type='text' placeholder="0" name='param[form_border_radius]' value="<?php echo $param['form_border_radius']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form's field border", "wplg-sc") ?>:<br/>
								<input type='text'  placeholder="1" name='param[field_border]' value="<?php echo $param['field_border']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form's field border radius", "wplg-sc") ?>:<br/>
								<input type='text'  placeholder="0" name='param[field_border_radius]' value="<?php echo $param['field_border_radius']; ?>"/> px
							</div>
						</div>
						<div class="wpbiker-admin-col"> 
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Placeholder & text alignment", "wplg-sc") ?>: <br/>
								<select name='param[text_position]'>
									<option value="left" <?php if($param['text_position']=='left'  || $param['text_position'] == "") { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wplg-sc") ?></option>
									<option value="center" <?php if($param['text_position']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wplg-sc") ?></option>      
									<option value="right" <?php if($param['text_position']=='right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wplg-sc") ?></option>
								</select>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Input height", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="36" name='param[height_input]' value="<?php echo $param['height_input']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-4">	
								<?php esc_attr_e("Button's text", "wplg-sc") ?>:<br/>
								<input type='text' placeholder="Send" name='param[field_button]' value="<?php echo $param['field_button']; ?>"/>
							</div>
						</div>
						<div class="wpbiker-admin-col"> 
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Button text size", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="16" name='param[button_size]' value="<?php echo $param['button_size']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Button's width", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="auto" name='param[form_button_width]' value="<?php echo $param['form_button_width']; ?>"/> <br/><input name="param[button_width_par]" type="radio" value="auto" <?php if($param['button_width_par']=='auto' || $param['form_width_par'] == '') { echo 'checked="checked"'; } ?>>auto <input name="param[button_width_par]" type="radio" value="px" <?php if($param['button_width_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[button_width_par]" type="radio" value="pr" <?php if($param['button_width_par']=='pr') { echo 'checked="checked"'; } ?>>%
							</div>
							<div class="wpbiker-admin-col-4">	
								<?php esc_attr_e("Button position", "wplg-sc") ?>: <br/>
								<select name='param[button_position]'>
									<option value="left" <?php if($param['button_position']=='left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wplg-sc") ?></option>
									<option value="center" <?php if($param['button_position']=='center') { echo 'selected="selected"'; } ?>><?php esc_attr_e("center", "wplg-sc") ?></option>      
									<option value="right" <?php if($param['button_position']=='right' || !isset($param['button_position'])) { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wplg-sc") ?></option>
								</select>
							</div>
						</div>
						<div class="wpbiker-admin-col"> 
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form background color", "wplg-sc") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[form_background_color]' value="<?php if(empty($param['form_background_color'])){echo "#ffffff";}else{echo $param['form_background_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form border color", "wplg-sc") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[form_border_color]' value="<?php if(empty($param['form_border_color'])){echo "#ffffff";}else{echo $param['form_border_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Text color", "wplg-sc") ?>:<br/> <input type='text' placeholder="#555555" class="wp-color-picker-field" data-alpha="true" name='param[field_text_color]' value="<?php if(empty($param['field_text_color'])){echo "#555555";}else{echo $param['field_text_color'];}?>"/>
							</div>
						</div>
						<div class="wpbiker-admin-col"> 
							<div class="wpbiker-admin-col-4">	
								<?php esc_attr_e("Placeholder text color", "wplg-sc") ?>:<br/> <input type='text' placeholder="#777777" class="wp-color-picker-field" data-alpha="true" name='param[field_placeholder_color]' value="<?php if(empty($param['field_placeholder_color'])){echo "#777777";}else{echo $param['field_placeholder_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form's field border color", "wplg-sc") ?>:<br/> <input type='text' placeholder="#eeeeee" class="wp-color-picker-field" data-alpha="true" name='param[field_border_color]' value="<?php if(empty($param['field_border_color'])){echo "#eeeeee";}else{echo $param['field_border_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Form's field background color", "wplg-sc") ?>:<br/> <input type='text' placeholder="#fcfcfc" class="wp-color-picker-field" data-alpha="true" name='param[field_background_color]' value="<?php if(empty($param['field_background_color'])){echo "#fcfcfc";}else{echo $param['field_background_color'];}?>"/>
							</div>
						</div>
						<div class="wpbiker-admin-col"> 
							<div class="wpbiker-admin-col-4">	
								<?php esc_attr_e("Button text color", "wplg-sc") ?>:<br/> 
								<input type='text' placeholder="#ffffff" class="wp-color-picker-field" data-alpha="true" name='param[button_text_color]' value="<?php if(empty($param['button_text_color'])){echo "#ffffff";}else{echo $param['button_text_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Button background color", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="#e95645" class="wp-color-picker-field" data-alpha="true" name='param[button_background_color]' value="<?php if(empty($param['button_background_color'])){echo "#e95645";}else{echo $param['button_background_color'];}?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Button background hover color", "wplg-sc") ?>:<br/> 
								<input type='text' placeholder="#d45041" class="wp-color-picker-field" data-alpha="true" name='param[button_hover_color]' value="<?php if(empty($param['button_hover_color'])){echo "#d45041";}else{echo $param['button_hover_color'];}?>"/>
							</div>
						</div>
					</div>
					<div id="t2" class="tab-content">
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Name field", "wplg-sc") ?>: <input name="param[include_field_name]" type="checkbox" value="1" <?php if(!empty($param['include_field_name'])) { echo 'checked="checked"'; } ?>><br/><input type='text' placeholder="Enter placeholder" name='param[field_name]' value="<?php echo $param['field_name']; ?>"/>
							</div>
							<div class="wpbiker-admin-col-4">
								<?php esc_attr_e("Email field", "wplg-sc") ?>: <div style="display:none;"><input name="param[include_field_mail]" type="checkbox" value="1" <?php if(!empty($param['include_field_mail'])) { echo 'checked="checked"'; } ?>></div><br/><input type='text' placeholder="Enter placeholder" name='param[field_mail]' value="<?php echo $param['field_mail']; ?>"/>	
							</div>
							<div class="wpbiker-admin-col-4">
							</div>
						</div>
					</div>
					<div id="t3" class="tab-content">
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Trigger for screens less than", "wplg-sc") ?>:<br/>
								<input type='text' placeholder="1024" name='param[screen_size]' value="<?php echo $param['screen_size']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-6">
								<?php esc_attr_e("Form width", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="85" name='param[mobile_width]' value="<?php echo $param['mobile_width']; ?>"/> <br/> <input name="param[mobile_width_par]" type="radio" value="px" <?php if($param['mobile_width_par']=='px') { echo 'checked="checked"'; } ?>>px <input name="param[mobile_width_par]" type="radio" value="pr" <?php if($param['mobile_width_par']=='pr' || $param['mobile_width_par'] =='') { echo 'checked="checked"'; } ?>>%
							</div>	
							<p/>
						</div>
					</div>
					<div id="t4" class="tab-content">
						<div class="wpbiker-admin-col">
							<a href="https://codecanyon.net/item/subscribers-generator-the-most-powerful-generator-of-subscribers/19358738?ref=wpbiker" target="_blank">Only in the pro version of plugin</a>
						</div>
					</div>
					<div id="t5" class="tab-content">
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-4"><?php esc_attr_e("Error text", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="Correct the fields, please" name='param[mail_send_error_text]' value="<?php echo $param['mail_send_error_text']; ?>"/> 
							</div>
							<div class="wpbiker-admin-col-4"><?php esc_attr_e("Error text size", "wplg-sc") ?>: <br/>
								<input type='text' placeholder="16" name='param[mail_send_error_size]' value="<?php echo $param['mail_send_error_size']; ?>"/> px
							</div>
							<div class="wpbiker-admin-col-4"><?php esc_attr_e("Error text color", "wplg-sc") ?>: <br/>
							<input type='text' placeholder="#e95645" class="wp-color-picker-field" data-alpha="true" name='param[mail_send_error_color]' value="<?php if(empty($param['mail_send_error_color'])){echo "#e95645";}else{echo $param['mail_send_error_color'];}?>"/></div>
						</div>
						<div class="wpbiker-admin-col">
							<div class="wpbiker-admin-col-12">
								<div class="wpbiker-admin-col-12">
									<?php esc_attr_e("Close confirmation text after sending in", "wplg-sc") ?> (<?php esc_attr_e("seconds", "wplg-sc") ?>):
								</div>
								<div class="wpbiker-admin-col-4">
									<input type='text' placeholder="3" name='param[mail_send_send_timer]' id="timer" value="<?php echo $param['mail_send_send_timer']; ?>"/> 
								</div>
							</div>
						</div>
						<div class="wpbiker-admin-col ">
							<div class="wpbiker-admin-col-12">
								<h4><?php esc_attr_e("Confirmation text", "wplg-sc") ?>:</h4>
								<?php echo wp_editor(stripslashes($param['confirmation']), 'confirmation', $confsettings); ?>
							</div>
						</div>
					</div>
					<div id="t6" class="tab-content">
						<div class="wpbiker-admin-col">
							<a href="https://codecanyon.net/item/subscribers-generator-the-most-powerful-generator-of-subscribers/19358738?ref=wpbiker" target="_blank">Only in the pro version of plugin</a>
						</div>
					</div>
					<div id="t7">
						<div class="wpbiker-admin-col">
							<h3>Additional options in Pro version:</h3>
							<div class="wpbiker-admin-col-12">
								<ol>
									<li>Integration with Integration and Integration</li>
									<li>Copying and export of the subscribers contact list in .xls, .csv</li>
									<li>Send the message to the user after his successful subscription</li>
									<li>Add subscription form after post content</li>
									<li>Widget with subscription form</li>
									<li>Send the message to admin</li>
									<li>Custom text above the form</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="wpbiker-rightcol">
			<div class="wpbikerbox">
				<h3><?php esc_attr_e("Publish", "wplg-sc") ?></h3>
				<div class="wpbiker-admin" style="display: block;">
					<div class="wpbikercolom">
						<div style="float:left;">
							<?php if ($id != ""){ echo '<p class="wpbikerdel"><a href="admin.php?page='.WPSC_BASENAME.'&info=del&did='.$id.'">Delete</a></p>';}; ?>
						</div>
						<div style="float:right;">
							<p/>
							<input name="submit" id="submit" class="button button-primary" value="<?php echo $btn; ?>" type="submit">
						</div>
					</div>
					<div class="wpbiker-admin-col-12">
						<b><?php esc_attr_e("Shortcode", "wplg-sc") ?>:</b>  [Subscribtion id=<?php echo $id; ?>]	
					</div>
				</div>
			</div>
			
			<div class="wpbikerbox">
				<h3><i class="fa fa-plug" aria-hidden="true"></i> <?php esc_attr_e("Well use with", "wpbiker-fp-lang") ?></h3>
				<div class="wpbiker-admin wpbiker-plugins">
					<ul>
						<li><a href="https://wordpress.org/plugins/popups-creator/" target="_blank">Popups Creator</a></li>
						<li><a href="https://wordpress.org/plugins/side-menu/" target="_blank">Side Menu</a></li>											
					</ul>
				</div>
			</div>
			
			<div class="wpbikerbox">				
				<div class="wpbiker-admin">
					<div class="wpbiker-admin-col-12">
						<center><a href='https://wpbiker.com/' target="_blank"><img src="<?php echo plugin_dir_url(__FILE__). 'img/icon.png' ?>"></a></center>
					</div>
					
					<div class="wpbiker-admin-col-12 wpbikericon">						 
						<a href='https://www.facebook.com/wowaffect/' title="Join Us on Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>  
						<a href='https://profiles.wordpress.org/wpbiker/' title="Join Us on WordPress" target="_blank"><i class="fa fa-wordpress wowicon" aria-hidden="true"></i></a>
						<a href="https://codecanyon.net/user/wpbiker?ref=wpbiker" title="Join Us on CodeCanyon" target="_blank"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
						<a href='https://wpbiker.com/' target="_blank" title="Make Your Website Legendary"><i class="fa fa-link" aria-hidden="true"></i></a> 
						<a href="https://wpcalc.com" target="_blank" title="Online Calculators on WordPress"><i class="fa fa-calculator" aria-hidden="true"></i></a>
						<a href="https://wow-estore.com" target="_blank" title="Make Your Site Unique"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
						
							
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	<input type="hidden" name="addtool" value="<?php echo $hidval; ?>" />    
	<input type="hidden" name="id" value="<?php echo $id; ?>" />	
	<input type="hidden" name="page" value="<?php echo WPSC_BASENAME; ?>" />
	<input type="hidden" name="tool" value="subscriber" />
	<input type="hidden" name="plugdir" value="<?php echo WPSC_BASENAME; ?>" />		
	<?php wp_nonce_field('wpbiker_action','wpbiker_nonce_field'); ?>
</form>