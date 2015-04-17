<?php

$cloudloader_mode = (isset($_POST['cloudloader_mode'])) ? $_POST['cloudloader_mode'] : $_GET['cloudloader_mode'];

if (!defined('MH_ROOT_PATH')) {
    define('MH_ROOT_PATH', 'mailhive/');
}


switch ($cloudloader_mode) {
    case 'install_core':
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'cloudbeez/cloudloader_core.php');
        break;

    case 'update_core':
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'common/functions/compatibility.php');
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'cloudbeez/cloudloader_core.php');
        break;

    case '_install_package':
    case 'select_package':
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'cloudbeez/cloudloader/bootstrap/inc_cloudloader_package_bootstrap.php');

        break;

    case 'install_package':
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'common/functions/compatibility.php');
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'cloudbeez/cloudloader_packages.php');

        break;

    case 'update_package':
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'common/functions/compatibility.php');
        require_once(MH_DIR_FS_CATALOG . MH_ROOT_PATH . 'cloudbeez/cloudloader_packages.php');

        break;
    default:
        break;
}
?>