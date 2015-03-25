<?php

/* --------------------------------------------------------------
   BeezDesk Integration
   --------------------------------------------------------------
*/

class BeezDeskExtender extends BeezDeskExtender_parent
{
    function proceed()
    {
        ob_start();
        if (defined('MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID') && MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID != '') {
        // Beezdesk Chat
            $beezdesk_button_id = MAILBEEZ_BEEZDESK_CHAT_WIDGET_ID;
        @include('mailhive/configbeez/config_beezdesk/includes/beezdesk_chat.php');
        // Beezdesk Chat

        $this->v_output_buffer['BEEZDESK_BOTTOM_CODE'] = ob_get_contents();
        ob_end_clean();
        }
        parent::proceed();
    }
}

?>