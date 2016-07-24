<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
include "php_serial.class.php";

$serial = new phpSerial;
$serial->deviceSet("/dev/ttyACM0");
$serial->confBaudRate(9600);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->deviceOpen();
$serial->sendMessage("Test");

$serial->deviceClose();

echo "I've sended a message! \n\r";
?>