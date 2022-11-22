<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteDevDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteDevDataType|array
     */
    protected $failedDevice;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteDevDataType|array  $failedDevice
     */
    public function __construct($failedDevice = null)
    {
        $this->failedDevice = $failedDevice;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteDevDataType|array  $failedDevice
     */
    public static function create($failedDevice = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteDevDataType|array
     */
    public function getFailedDevice()
    {
        return $this->failedDevice;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteDevDataType|array  $failedDevice
     * @return $this
     */
    public function setFailedDevice($failedDevice)
    {
        $this->failedDevice = $failedDevice;

        return $this;
    }
}
