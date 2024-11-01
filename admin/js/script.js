jQuery(document).ready(function($) {
	//* Vertical table
	$('.tab-nav li:first').addClass('select'); 
	$('.tab-panels>div').hide().filter(':first').show();    
	$('.tab-nav a').click(function(){
		$('.tab-panels>div').hide().filter(this.hash).show(); 
		$('.tab-nav li').removeClass('select');
		$(this).parent().addClass('select');
		return (false); 
	})
	
	//* Include colorpicker
	$('.wp-color-picker-field').wpColorPicker();
	
	$('.tab-box').after('<span style="float:right;"><a href="https://codecanyon.net/item/subscribers-generator-the-most-powerful-generator-of-subscribers/19358738?ref=wpbiker" target="_blank">GET PRO VERSION</a></span>');
	
	//* Button parametrs
	if ($('input[name="param[button_width_par]"]:checked').val() == "auto"){
		$('[name="param[form_button_width]"]').val('');
		$('[name="param[form_button_width]"]').attr("disabled", "disabled");
	}
	$('[name="param[button_width_par]"]').click(function(){		
		var height_par = $('input[name="param[button_width_par]"]:checked').val();		
		if (height_par == 'auto'){
			$('[name="param[form_button_width]"]').val('');
			$('[name="param[form_button_width]"]').attr("disabled", "disabled");			
		}
		else {
			$('[name="param[form_button_width]"]').val('0');
			$('[name="param[form_button_width]"]').removeAttr("disabled");
		}
	});
	
	chooseservice();	
});
function chooseservice(){
	var service = jQuery('[name="param[choosservice]"]').val();		
	if (service == 'mailchimp'){		
		jQuery('.mailchimp').css('display', '');
		jQuery('.getresponse').css('display', 'none');
		jQuery('#registr').html('<a href="http://eepurl.com/cj7tkX" target="_blank">Register now</a>');
	}
	if (service == 'getresponse'){
		jQuery('.mailchimp').css('display', 'none');
		jQuery('.getresponse').css('display', '');
		jQuery('#registr').html('<a href="http://www.getresponse.com/create_free_account.html?a=wow-company&c=link_name" target="_blank">Register now</a>');
		
	}
}
