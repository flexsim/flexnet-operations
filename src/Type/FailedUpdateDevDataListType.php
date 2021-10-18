<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateDevDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDeviceDataType|array 
     */
    protected $failedDevice;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDeviceDataType|array $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateDeviceDataType|array $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateDeviceDataType|array 
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateDeviceDataType|array $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;
        return $this;
    }
}
