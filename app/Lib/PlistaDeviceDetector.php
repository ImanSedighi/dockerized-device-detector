<?php
namespace Lib;
use DeviceDetector\DeviceDetector;
class PlistaDeviceDetector 
{
    private $userAgent;
    public function __construct($userAgent) {
        $this->userAgent = $userAgent;
    }

    /**
     * @return array
     * @throws string
     */
    public function getDeviceInfo() {
        $dd = new DeviceDetector($this->userAgent);
        $dd->parse();
        if ($dd->isBot()) {
            throw ("Bot Detected.");
        } else {
            $result['deviceType'] = $dd->getDeviceName();
            $result['os'] = $dd->getOs('name');
            $result['browser'] = $dd->getClient('name');
            return $result;
        }
    }
}