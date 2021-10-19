<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedGenerateCapabilityResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedCapabilityResponseDataType
     */
    protected $failedDevice;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedCapabilityResponseDataType|array $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedCapabilityResponseDataType|array $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedCapabilityResponseDataType
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedCapabilityResponseDataType $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;
        return $this;
    }
}
