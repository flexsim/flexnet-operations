<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateDeviceDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceDataType
     */
    protected $device;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceDataType $device
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceDataType $device = null, string $reason = null)
    {
        $this->device = $device;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceDataType $device
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceDataType $device = null, string $reason = null)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
