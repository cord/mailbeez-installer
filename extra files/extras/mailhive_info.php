<?php

define('GZIP_COMPRESSION', 'false');
define('GZIP_LEVEL', '0');
// define('STRICT_ERROR_REPORTING', true); // zencart
/*
error_reporting(E_ALL & ~ E_NOTICE);
ini_set('display_errors', 1);
*/

require('includes/application_top.php');
require_once(DIR_FS_CATALOG . 'mailhive/common/functions/compatibility.php');
require_once(DIR_FS_CATALOG . 'mailhive/common/classes/mailhive.php');

?><!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
    <title>MailHive Info</title>
    <base href="<?php echo (($request_type == 'SSL') ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG; ?>">
    <link rel="stylesheet" type="text/css" media="print, projection, screen"
          href="<?php echo MH_CATALOG_SERVER . DIR_WS_CATALOG ?>/mailhive/common/common.css">
    <style type="text/css">
        table {
            table-layout: fixed;
            width: 100%;
            border: 1px solid #c0c0c0;
            word-wrap: break-word;
            font-size: 10px;
        }


    </style>
</head>

<body marginwidth="0" marginheight="0" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<div class="pageHeading">MailBeez - Mode: <?php echo MAILBEEZ_MAILHIVE_MODE ?>
</div>
(platform: <?php echo MH_PLATFORM; ?>)
<br>
<?php echo (defined('PROJECT_VERSION')) ? PROJECT_VERSION : '';?>
<table>
    <tr>
        <td>Constant</td>
        <td>loaded value</td>
        <td>Database value</td>
    </tr>

<?php
  $configuration_query = mh_db_query("select configuration_key as cfgKey, configuration_value as cfgValue from " . TABLE_CONFIGURATION . " where configuration_key like 'MAILBEEZ%' order by configuration_key ");
    while ($configuration = mh_db_fetch_array($configuration_query)) {

        ?>
        <tr bgcolor="<?php echo (constant($configuration['cfgKey']) !== $configuration['cfgValue']) ? '#f8933c'
                : '#abd37f' ?>">
            <td style="word-wrap: normal"><?php echo $configuration['cfgKey'] ?></td>
            <td><?php echo constant($configuration['cfgKey'])?></span></td>
            <td><?php echo $configuration['cfgValue']?></td>
        </tr>
        <?php

    }
    ?>
</table>

<hr size="1" noshade>
</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>