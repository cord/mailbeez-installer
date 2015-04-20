<?php
/*
  MailBeez Automatic Trigger Email Campaigns
  http://www.mailbeez.com

  Copyright (c) 2010 - 2013 MailBeez

  inspired and in parts based on
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License

 */



// set MH_ROOT_PATH
if (!defined('MH_ROOT_PATH')) {
    // default location
    $_MH_ROOT_PATH = 'mailhive/';
    $_mh_search_paths = array('ext/mailhive/', 'includes/external/mailhive/');

    foreach ($_mh_search_paths as $_MH_ROOT_PATH_TRY) {
        if (file_exists($_MH_ROOT_PATH_TRY . 'cloudbeez/cloudloader_core.php')) {
            $_MH_ROOT_PATH = $_MH_ROOT_PATH_TRY;
        }
    }

    define('MH_ROOT_PATH', $_MH_ROOT_PATH);
}

if (file_exists(MH_ROOT_PATH . 'configbeez/config_shopvoting/includes/inc_shopvoting_write.php')) {
    require_once(MH_ROOT_PATH . 'configbeez/config_shopvoting/includes/inc_shopvoting_write.php');
} else {
    ?>
    Please install Shopvoting module
<?php
}
