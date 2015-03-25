<?php

/* --------------------------------------------------------------
   MailBeez Integration
   --------------------------------------------------------------
*/

class MailBeezAnalyticsClicktracker extends MailBeezAnalyticsClicktracker_parent
{
    function proceed()
    {
        @include_once(DIR_FS_CATALOG . 'mailhive/includes/clicktracker.php');
        parent::proceed();
    }
}

?>