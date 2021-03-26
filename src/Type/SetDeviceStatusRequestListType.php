<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetDeviceStatusRequestListType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SetDeviceStatusType
     */
    private $devices;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SetDeviceStatusType $devices
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SetDeviceStatusType $devices)
    {
        $this->devices = $devices;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SetDeviceStatusType $devices
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SetDeviceStatusType $devices)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SetDeviceStatusType
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SetDeviceStatusType $devices
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;
        return $this;
    }


}

