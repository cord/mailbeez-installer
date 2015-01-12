<?php

/* --------------------------------------------------------------
   HelloWorldExtender.inc.php 2012-01-26 gm
   Gambio GmbH
   http://www.gambio.de
   Copyright (c) 2012 Gambio GmbH
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------
*/

class MailBeezExtender extends MailBeezExtender_parent
{
    function proceed()
    {

        ob_start();
        // MailBeez
        if (defined('MAILBEEZ_CRON_SIMPLE_STATUS') && MAILBEEZ_CRON_SIMPLE_STATUS == 'True') {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_cron_simple/includes/cron_simple_inc.php');
        }
        if (defined('MAILBEEZ_CRON_ADVANCED_STATUS') && MAILBEEZ_CRON_ADVANCED_STATUS == 'True') {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_cron_advanced/includes/cron_advanced_inc.php');
        }
        // - MailBeez


        // MailBeez BigData Tracking
        if (file_exists(DIR_FS_CATALOG . 'mailhive/configbeez/config_ezako/includes/eztracker.php')) {
            @include_once(DIR_FS_CATALOG . 'mailhive/configbeez/config_ezako/includes/eztracker.php');
        }
        // MailBeez BigData Tracking

        $this->v_output_buffer['MAILBEEZ_BOTTOM_CODE'] = ob_get_contents();
        ob_end_clean();

        parent::proceed();

    }
}

?>