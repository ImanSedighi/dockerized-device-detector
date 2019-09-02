<?php
require_once 'vendor/autoload.php';
use Lib\PlistaDeviceDetector;
use PHPUnit\Framework\TestCase;
class DeviceDetectorTest extends TestCase
{
    public function testReturnCorrectData(){
        $userAgent = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/53.0.2785.143 Chrome/53.0.2785.143 Safari/537.36';
        $deviceDetector = new PlistaDeviceDetector($userAgent);
        $info = $deviceDetector->getDeviceInfo();
        $this->assertEquals($info['browser'],'Chromium');
        $this->assertEquals($info['os'],'Ubuntu');
        $this->assertEquals($info['deviceType'],'desktop');

    }
}