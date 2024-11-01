function scsend(id,errsize,errtext,errcolor) {	
	var buttid = 'sc-confirm-'+id;	
	var result = 'sc-result-'+id;	
	var countname = jQuery("#" + buttid +" .sc-name").length;
	var countemail = jQuery("#" + buttid +" .sc-email").length;	
	var errorcontent = '<span style="color:'+errcolor+';font-size:'+errsize+'px;">'+errtext+'</span>';
	var name = jQuery("#" + buttid +" .sc-name").val();
	var email = jQuery("#" + buttid +" .sc-email").val();	
	jQuery("#" + buttid + " .sc-name").removeAttr('style');	
	jQuery("#" + buttid).removeAttr('style');	
	if ( name == '' && countname == 1){		
        jQuery("#" + buttid +" .sc-name").css({"border-color": errcolor});
        jQuery("#" + buttid +" .sc-name").focus();
		jQuery("#" + buttid).css({"margin-bottom": "13px"});
		jQuery('#'+result).html(errorcontent);	
		return false;		
    } 
	if ( email == '' && countemail == 1){
        jQuery("#" + buttid +" .sc-email").css({"border-color": errcolor});
        jQuery("#" + buttid +" .sc-email").focus();
		jQuery("#" + buttid).css({"margin-bottom": "13px"});
		jQuery('#'+result).html(errorcontent);
		return false;
	} 
	if ( email != '' && countemail == 1){
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test(email)){			
			jQuery("#" + buttid + " .sc-email").removeAttr('style');			
		} 
		else {
			
			jQuery("#" + buttid +" .sc-email").css({"border-color": errcolor});
			jQuery("#" + buttid +" .sc-email").focus();
			jQuery("#" + buttid).css({"margin-bottom": "13px"});
			jQuery('#'+result).html(errorcontent);
			return false;
            }
	}
	jQuery('#'+result).html('');
	var data = {
		'action': 'send_sc_form',
		name:name,
		email:email,
		id:id
	};
	jQuery.post(send_sc_form.ajaxurl, data, function(msc) {
		jQuery('#sc-confirm-'+id).html(msc);
	});	
}