<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMoveDeviceListDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMoveDeviceDataType
     */
    private $failedDevice;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMoveDeviceDataType|array $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMoveDeviceDataType|array $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMoveDeviceDataType
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMoveDeviceDataType $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;
        return $this;
    }


}
