<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSetDeviceStatusDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSetDeviceStatusDataType|array 
     */
    private $failedDevice;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetDeviceStatusDataType|array $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetDeviceStatusDataType|array $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSetDeviceStatusDataType|array 
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSetDeviceStatusDataType|array $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;
        return $this;
    }
}
