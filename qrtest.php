<?php

require_once('vendor/autoload.php');
use Endroid\QrCode\QrCode;

$qrCode = new QrCode('http://fredtrotter.com');

$qrCode->writeFile('fredtrotter2.png');


