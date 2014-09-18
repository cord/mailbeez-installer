<?php

/* --------------------------------------------------------------
   test_ContentView.inc.php 2011-09-20 gambio
   Gambio GmbH
   http://www.gambio.de
   Copyright (c) 2011 Gambio GmbH
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------
*/


class MailBeezFooter extends MailBeezFooter_parent
{
    function get_html()
    {

   		# get original output
		$t_html = parent::get_html();

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