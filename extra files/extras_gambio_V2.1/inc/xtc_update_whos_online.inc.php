<?php
/* --------------------------------------------------------------
   xtc_update_whos_online.inc.php 2014-01-08 gm
   Gambio GmbH
   http://www.gambio.de
   Copyright (c) 2014 Gambio GmbH
   Released under the GNU General Public License (Version 2)
   [http://www.gnu.org/licenses/gpl-2.0.html]
   --------------------------------------------------------------


   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(whos_online.php,v 1.8 2003/02/21); www.oscommerce.com
   (c) 2003	 nextcommerce (xtc_update_whos_online.inc.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: xtc_update_whos_online.inc.php 899 2005-04-29 02:40:57Z hhgag $)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

function xtc_update_whos_online()
{
    if (isset($_SESSION['customer_id'])) {
        $wo_customer_id = $_SESSION['customer_id'];

        $customer_query = xtc_db_query("select customers_firstname, customers_lastname from " . TABLE_CUSTOMERS . " where customers_id = '" . $_SESSION['customer_id'] . "'");
        $customer = xtc_db_fetch_array($customer_query);

        $wo_full_name = addslashes($customer['customers_firstname'] . ' ' . $customer['customers_lastname']);
    } else {
        $wo_customer_id = '';
        $wo_full_name = 'Guest';
    }

    $wo_session_id = xtc_session_id();
    $wo_ip_address = getenv('REMOTE_ADDR');
    $wo_last_page_url = addslashes(getenv('REQUEST_URI'));

    // MailBeez
    // avoid /mailhive.php?cron_simple=1 in who is online table
    if (preg_match("/mailhive.php/", $wo_last_page_url)) {
        return false;
    }
    // - MailBeez


    $current_time = time();
    $xx_mins_ago = ($current_time - 900);

    // remove entries that have expired
    xtc_db_query("delete from " . TABLE_WHOS_ONLINE . " where time_last_click < '" . $xx_mins_ago . "'");

    $stored_customer_query = xtc_db_query("select count(*) as count from " . TABLE_WHOS_ONLINE . " where session_id = '" . $wo_session_id . "'");
    $stored_customer = xtc_db_fetch_array($stored_customer_query);

    if (
        strpos($wo_last_page_url, 'favicon.ico') === false &&
        strpos($wo_last_page_url, 'rss.php') === false &&
        strpos($wo_last_page_url, '.jpg') === false &&
        strpos($wo_last_page_url, '.js.php') === false &&
        strpos($wo_last_page_url, 'request_port.php') === false &&
        strpos($wo_last_page_url, 'version_info.php') === false
    ) {

        if ($stored_customer['count'] > 0) {

            xtc_db_query("update " . TABLE_WHOS_ONLINE . " set customer_id = '" . $wo_customer_id . "', full_name = '" . $wo_full_name . "', ip_address = '" . $wo_ip_address . "', time_last_click = '" . $current_time . "', last_page_url = '" . $wo_last_page_url . "' where session_id = '" . $wo_session_id . "'");
        } else if (!empty($wo_session_id)) {
            xtc_db_query("insert into " . TABLE_WHOS_ONLINE . " (customer_id, full_name, session_id, ip_address, time_entry, time_last_click, last_page_url) values ('" . $wo_customer_id . "', '" . $wo_full_name . "', '" . $wo_session_id . "', '" . $wo_ip_address . "', '" . $current_time . "', '" . $current_time . "', '" . $wo_last_page_url . "')");
        }
    }
}