<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateDevRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceDataType
     */
    protected $device;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceDataType $device
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceDataType $device)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceDataType $device
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceDataType $device)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceDataType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceDataType $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }
}
