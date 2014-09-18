<?php

/* --------------------------------------------------------------
   MailBeez Integration
   --------------------------------------------------------------
*/


class MailBeezAdminApplicationTopExtender extends MailBeezAdminApplicationTopExtender_parent
{
    function proceed()
   	{
   		parent::proceed();

        define('MH_DIR_FS_CATALOG', (substr(DIR_FS_CATALOG, -1) != '/') ? DIR_FS_CATALOG . '/' : DIR_FS_CATALOG);
        @include(MH_DIR_FS_CATALOG . '/mailhive/common/main/inc_gambio_menu.php');
    }
}

?>