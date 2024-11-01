<?php

			if (empty($param['confirmation'])){
				$thank = "Thank you. We will contact you shortly.";
			}
			else {
				$thank = $param['confirmation'];
			}
			
			
			if (empty($param['mail_send_send_timer'])){
				$timer = "3000";
			}
			else {
				$timer = $param['mail_send_send_timer']*1000;	
				}			
			
			
			$primsg=$thank;
						
			print "<script language='Javascript'>function reload() {jQuery('#sc-form-".$id."').toggle(); }; setTimeout('reload()', ".$timer.");</script>".$primsg;			
?>