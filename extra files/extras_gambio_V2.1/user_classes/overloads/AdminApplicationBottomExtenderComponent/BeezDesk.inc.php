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


class BeezDesk extends BeezDesk_parent
{
    function proceed()
   	{
   		parent::proceed();
        // BeezDesk
        // BOF: Mailbeez Customer Insight
        define('MH_DIR_FS_CATALOG', (substr(DIR_FS_CATALOG, -1) != '/') ? DIR_FS_CATALOG . '/' : DIR_FS_CATALOG);
        @include(MH_DIR_FS_CATALOG . '/mailhive/configbeez/config_customer_insight/includes/admin_footer_include.php');
        // EOF: Mailbeez Customer Insight
        // BeezDesk

        # return modified output
    }
}

?>