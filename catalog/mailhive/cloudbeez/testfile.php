<?php
$testfile = "testchmod.php";
error_reporting(0);
$i = 0;
if (!chmod($testfile, 0666)) {
    $i++;
} else {
    $msg .= "able to chmod
";
}
if (!$fp = @fopen($testfile, "w")) {
    $i++;
} else {
    $msg .= "able to open file
";
}
$contents = file_get_contents($testfile, true);
if (fwrite($fp, $testfile) === FALSE) {
    $i++;
} else {
    $msg .= "able to write to file
";
}
if (!fclose($fp)) {
    $i++;
} else {
    $msg .= "able to close file
";
}

if ($i > 0) {
    echo $testfile . " is Write-Protected";
} else {
    echo $msg;
}
?>