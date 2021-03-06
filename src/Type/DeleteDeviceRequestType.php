<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteDeviceRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;

        return $this;
    }
}
