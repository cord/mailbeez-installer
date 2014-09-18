<?php

/* 
Plugin for 

EN http://www.mailbeez.com/documentation/mailbeez/config_shopvoting/
DE http://www.mailbeez.de/dokumentation/configbeez/config_shopvoting/

Insert template variable:

    {$smarty.session.mailbeez_shopvoting_widget}

where ever you would like to show the voting widget

*/

class MailBeezShopvotingDefault extends MailBeezShopvotingDefault_parent
{
    function proceed()
    {
        if (defined('MAILBEEZ_SHOPVOTING_STATUS') && (MAILBEEZ_SHOPVOTING_STATUS == 'True')) {
            require_once(DIR_FS_CATALOG . '/mailhive/configbeez/config_shopvoting/classes/Shopvoting_widget.php');
            $shopvoting = new Shopvoting_widget();
            $_SESSION['mailbeez_shopvoting_widget'] = $shopvoting->output();
        //{$smarty.session.mailbeez_shopvoting_widget}
        }

        // for a custom solution
        // use _custom/MailBeezShopvotingCustom.inc.php
        // move into ApplicationTopExtenderComponent
        // and adopt to your needs

        parent::proceed();
    }
}

?>