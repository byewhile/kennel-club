<?php
session_start();

$numbers = mt_rand(100000, 1000000);
$captcha = imagecreatetruecolor(100, 25);
$black = imagecolorallocate($captcha, 0, 0, 0);
$red = imagecolorallocate($captcha, 255, 0, 0);

imagefill($captcha, 0, 0, $black);
imagestring($captcha, 5, 20, 5, $numbers, $red);

$_SESSION["captcha"] = $numbers;

header('Content-type: image/png');
imagepng($captcha);
