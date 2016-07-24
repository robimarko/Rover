<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include "PhpSerial.php";

$serial = new phpSerial;
$serial->deviceSet("/dev/ttyACM0");
$serial->confBaudRate(19200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Left_start");

$serial->deviceClose();
echo "I've sended a left message! \n\r";
?>