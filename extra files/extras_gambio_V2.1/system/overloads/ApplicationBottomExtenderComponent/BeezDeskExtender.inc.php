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

        // Beezdesk Chat
        $beezdesk_button_id = '123456';
        @include('mailhive/configbeez/config_beezdesk/includes/beezdesk_chat.php');
        // Beezdesk Chat


        $this->v_output_buffer['BEEZDESK_BOTTOM_CODE'] = ob_get_contents();
        ob_end_clean();

        parent::proceed();
    }
}

?>