<?php
echo "PHP version: " . PHP_VERSION . "<br><br>";
 
if (PHP_MAJOR_VERSION == 4) {
	die('Not supported PHP version');
}
$extensions = get_loaded_extensions();
echo "Supported loaders:<br><br>";
if (in_array('Zend Guard Loader', $extensions)) {
	if (is_int(PHP_MAJOR_VERSION) && is_int(PHP_MINOR_VERSION) && PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION >= 4) {
		echo "<b>ZendGuardLoader</b> - use product ZIP ending with '<b>_zendEncoded54.zip</b>' <br>";
	} else if (is_int(PHP_MAJOR_VERSION) && is_int(PHP_MINOR_VERSION) && PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION == 3) {
		echo "<b>ZendGuardLoader</b> - use product ZIP ending with '<b>_zendEncoded53.zip</b>' <br>";
	} else {
		echo "<b>ZendGuardLoader</b> - use product ZIP ending with '<b>_zendEncoded52.zip</b>' <br>";
	}
}
if (in_array('Zend Optimizer', $extensions)) {
	$isCorrectVersion = true;
	$zendOptimizerVer = '';
	if(function_exists('zend_optimizer_version')) {
		$zendOptimizerVer = zend_optimizer_version();
		$zendOptimizerMajorVer = (int)substr($zendOptimizerVer, 0, strpos($zendOptimizerVer, '.'));
		$zendOptimizerMinorPart = substr($zendOptimizerVer, strpos($zendOptimizerVer, '.')+1);
		$zendOptimizerMinorVer = (int)substr($zendOptimizerMinorPart, 0, strpos($zendOptimizerMinorPart, '.'));
		if ($zendOptimizerMajorVer < 3 || ($zendOptimizerMajorVer == 3 && $zendOptimizerMinorVer < 3)) {
			$isCorrectVersion = false;
			echo 'Zend Optimizer '.$zendOptimizerVer.' - old, required is a minimum of Zend Optimizer version 3.3<br>';
		}
	}
	if ($isCorrectVersion) {
		echo "<b>Zend Optimizer</b>".($zendOptimizerVer != '' ? " (v$zendOptimizerVer)" : '' )." - use product ZIP ending with '<b>_zendEncoded52.zip</b>'<br>";
	}
}
if (in_array('ionCube Loader', $extensions)) {
	$isCorrectVersion = true;
	$ioncubeVersion = '';
	if (function_exists('ioncube_loader_version')) {
		$ioncubeVersion = ioncube_loader_version();
		$ioncubeMajorVersion = (int)substr($ioncubeVersion, 0, strpos($ioncubeVersion, '.'));
		$ioncubeMinorVersion = (int)substr($ioncubeVersion, strpos($ioncubeVersion, '.')+1);
		if ($ioncubeMajorVersion < 4 || ($ioncubeMajorVersion == 4 && $ioncubeMinorVersion < 3)) {
			$isCorrectVersion = false;
			echo 'ionCube Loader '.$ioncubeVersion.' - old, required is a minimum of ionCube Loader version 4.3<br>';
		}
	}
	if ($isCorrectVersion) {
		if (is_int(PHP_MAJOR_VERSION) && is_int(PHP_MINOR_VERSION) && PHP_MAJOR_VERSION == 5 && PHP_MINOR_VERSION >= 3) {
			echo "<b>ionCube Loader</b>".($ioncubeVersion != '' ? " (v$ioncubeVersion)" : '' )." - use product ZIP ending with '<b>_ionEncoded53.zip</b>' (PHP 5.3.0 and above)<br>";
		} else {
			echo "<b>ionCube Loader</b>".($ioncubeVersion != '' ? " (v$ioncubeVersion)" : '' )." - use product ZIP ending with '<b>_ionEncoded52.zip</b>' (All PHP 5.2.X versions)<br>";
		}
	}
}
 
//Note: Always use binary mode when uploading files to your server using FTP
 
//PLEASE DELETE THIS SCRIPT AFTER INSTALLATION!
?>