<?php

/* --------------------------------------------------------------
   BeezDesk Integration
   --------------------------------------------------------------
*/

class BeezDeskExtender extends BeezDeskExtender_parent
{
    function proceed()
    {
		// Beezdesk Chat
		$beezdesk_button_id = '123456';
		@include('mailhive/configbeez/config_beezdesk/includes/beezdesk_chat.php');
        // Beezdesk Chat


		parent::proceed();
    }
}

?>