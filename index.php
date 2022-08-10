<?php

include 'pix.php';

$code = $_REQUEST["code"] ?? "";

$C = urldecode($code);

header( 'Content-type: image/svg+xml' );

$dataImage = GeraQRCode($C);

$dataImage = str_replace("data:image/svg+xml;base64,", "", $dataImage);
$dataImage = base64_decode($dataImage);


// var_dump($dataImage);

// die;
echo $dataImage;