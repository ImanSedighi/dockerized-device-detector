<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require "vendor/autoload.php";
use Lib\PlistaDeviceDetector;

$agent = $_SERVER['HTTP_USER_AGENT'];
$deviceDetector = new PlistaDeviceDetector($agent);
$info = $deviceDetector->getDeviceInfo();

$response =
    ["device"=>$info["deviceType"],
     "os"=>$info["os"],
     "browser"=>$info["browser"]
    ];
header('Content-type: application/json');
echo json_encode( $response );