<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetDeviceStatusRequestListType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SetDeviceStatusType|array
     */
    protected $devices;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SetDeviceStatusType|array $devices
     */
    public function __construct($devices)
    {
        $this->devices = $devices;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SetDeviceStatusType|array $devices
     */
    public static function create($devices)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SetDeviceStatusType|array
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SetDeviceStatusType|array $devices
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;

        return $this;
    }
}
