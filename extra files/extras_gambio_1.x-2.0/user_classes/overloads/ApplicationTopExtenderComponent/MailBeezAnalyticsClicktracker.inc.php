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

class MailBeezAnalyticsClicktracker extends MailBeezAnalyticsClicktracker_parent
{
    function proceed()
    {
        @include_once(DIR_FS_CATALOG . 'mailhive/includes/clicktracker.php');
        parent::proceed();
    }
}

?>