<?php

$base_path = '../mailhive/cloudbeez/';

include $base_path . 'cloudloader/php/boot.php';


$screen_img = 'screen_osc.png';

/*

switch (MH_PLATFORM) {
    case 'oscommerce':
        if (MH_PLATFORM_OSC_23) {
            $admin_template = 'main_osc23.tpl.php';
        }
        if (MH_PLATFORM_OSCMAX_25) {
            $admin_template = 'main_oscmax25.tpl.php';
        }
        if (MH_PLATFORM_TRUELOADED) {
            $admin_template = 'main_trueloaded.tpl.php';
        }
        break;
    case 'creloaded':
        if (INSTALLED_VERSION_MAJOR == 6 && INSTALLED_VERSION_MINOR == 2) {
            $admin_template = 'main_creloaded_62.tpl.php';
        } else {
            $admin_template = 'main_creloaded.tpl.php';
        }
        break;
    case 'zencart':
        $admin_template = 'main_zc.tpl.php';
        break;
    case 'xtc':
        $admin_template = 'main_xtc.tpl.php';
        if (MH_PLATFORM_XTCM) {
            $screen_img = $inst_lang . '_screen_modified.png';
        }

        if (MH_PLATFORM_XTC_SEO) {
            $admin_template = 'main_xtc_seo.tpl.php';
        }
        if (MH_PLATFORM_XTC_ECB) {
            $admin_template = 'main_xtc_ecb.tpl.php';
        }
        break;
    case 'gambio':
        if (MH_PLATFORM_GAMBIO == 1) {
            $admin_template = 'main_gambiogx.tpl.php';
        } elseif (MH_PLATFORM_GAMBIO == 2) {
            $admin_template = 'main_gambiogx2.tpl.php';
        }
        break;
    default:
}


*/


$cloudloader = new Cloudloader();
$inc_content = $cloudloader->getContent('mailbeez_core_installer/' . $inst_lang, array('IMG' => $screen_img));
$inc_content_common = $cloudloader->getContent('mailbeez_core_common/' . $inst_lang, array());

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-15"/>
    <meta name="viewport" content="width=device-width">
    <title>MailBeez OS Cloudloader</title>
    <!-- Styles -->
    <link href="<?php echo $base_path; ?>cloudloader/css/vendor.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/layout.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/controls.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/animations.css" rel="stylesheet">
    <link href="<?php echo $base_path; ?>cloudloader/css/awesome/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .device:after {
            background-image: -moz-linear-gradient(center top, rgba(250, 250, 250, 0) 0%, #ECF0F1 100%);
            bottom: 0;
            content: "";
            height: 40%;
            left: 0;
            position: absolute;
            width: 100%;
            z-index: 1;
        }

        .device {
            height: 440px;
            margin-left: -24px;
            margin-top: 20px;
            overflow: hidden;
            position: relative;
            width: 987px;
        }

        .device img {
            animation: 600ms ease-out 0s normal none 1 flyUp;
            display: inline-block;
            vertical-align: middle;
        }

    </style>

</head>
<body class="js">

<div id="wrap">
    <!-- Header -->
    <header>
        <div class="container" id="containerHeader">


            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-cloud-download fa-5x" style="color:#fff; opacity: 0.25; font-size: 300px; display: inline; position: absolute; top: -80px; right: -100px;z-index: 900"></i>
                    <!-- Logo -->
                    <h1 style="z-index: 1000; position: relative">MailBeez</h1>

                </div>
            </div>

        </div>

        <!-- Title -->
        <section class="title">
            <div class="container" id="containerTitle">
                <div class="row">
                    <div class="col-xs-7">


                        <!-- Heading -->
                        <h2 class="animate move_right">

                            <i class="fa fa-cloud-download fa-1x" style="color:#fff"></i>

                            <?php echo MAILBEEZ_INSTALL_TITLE; ?></h2>

                    </div>
                    <div class="col-xs-5 visible-xs visible-sm visible-md visible-lg">
                        <!-- Step progress -->
                        <div class="steps row animate move_up">
                            <div class="col-xs-4"><p>1</p></div>
                            <div class="col-xs-4"><p>2</p></div>
                            <div class="col-xs-4"><p>3</p></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </header>

    <!-- Body -->
    <section class="body">
        <div class="container" id="containerBody">
            <?php if (!$inc_content) { ?>
                <div class="row">
                    <div class="col-xs-6">
                        <p>
                            Mit MailBeez endlich komfortabel, einfach und kostengünstig möglich:
                        </p>

                        <h2>Nutzen Sie das Potenzial Ihres Kunden-Bestandes </h2>

                        <p>
                            MailBeez integriert sich nahtlos mit Ihrem Online-Shop und kann wertvolle Informationen zu Ihren Kunden nutzen.

                        </p>

                        <p> Mit Hilfe von vorgefertigten Email-Marketing-Modulen kontaktiert MailBeez Ihre Kunden fortlaufend mit hoch-personalisierten, relevanten Emails z.B. zur Kundenrückgewinnung mit Gutscheinen, Bitte um Produktbewertungen, Geburtstags-Glückwünschen. Es können aber auch traditionelle Newsletter versendet werden - mit der Möglichkeit z.B. nach gekauften Produkten und Geografischen Daten zu segmentieren!
                        </p>

                        <p> &nbsp; </p>

                        <p>
                            <a class="btn btn-primary btn-lg" href="mailbeez.php?cloudloader_mode=install_core">
                                Installation starten
                                <i class="fa fa-arrow-circle-o-right"></i>

                            </a>
                        </p>

                        <p> &nbsp; </p>

                        <p>
                            Das Installations-Programm wird das
                            <b>kostenfreie MailBeez Grund-System</b> auf Ihrem Server installieren.
                        </p>

                        <p>
                            Sie können das Grundsystem dann nach Bedarf mit kostenfreien, Premium-Modulen erweitern oder das für Sie passende Paket mit monatlicher Zahlung buchen:

                        </p>
                    </div>
                    <div class="col-xs-6">
                        <div class="device">

                            <img src="../mailhive/cloudbeez/cloudloader/images/<?php echo $screen_img; ?>">
                        </div>
                    </div>
                </div>
            <?php
            } else {
                echo $inc_content;
            }?>
        </div>
        <div class="row">
            <div class="col-xs-3  pull-right" style="text-align: right; opacity: 0.5; padding-right: 30px;">
                Version <?php echo CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION; ?>-<?php echo MH_PLATFORM; ?>-<?php echo MH_ID; ?>
            </div>
        </div>
    </section>
</div>


<!-- Footer -->
<footer>
    <div class="container" id="containerFooter"></div>
</footer>

<?php echo $inc_content_common; ?>
</body>
</html>


