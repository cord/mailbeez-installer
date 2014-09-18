<?php

/* --------------------------------------------------------------
   MailBeez Integration
   --------------------------------------------------------------
*/

class MailBeezFooter extends MailBeezFooter_parent
{
    function get_html()
    {

        # get original output
        $t_html = parent::get_html();

        // MailBeez
        if (defined('MAILBEEZ_CRON_SIMPLE_STATUS') && MAILBEEZ_CRON_SIMPLE_STATUS == 'True') {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_cron_simple/includes/cron_simple_inc.php');
        }
        if (defined('MAILBEEZ_CRON_ADVANCED_STATUS') && MAILBEEZ_CRON_ADVANCED_STATUS == 'True') {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_cron_advanced/includes/cron_advanced_inc.php');
        }
        // - MailBeez


        // MailBeez Ezako Tracking
        if (file_exists(DIR_FS_CATALOG . 'mailhive/configbeez/config_ezako/includes/eztracker.php')) {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_ezako/includes/eztracker.php');
        }
        // MailBeez Ezako Tracking

        # return modified output
        return $t_html;
    }
}

?>