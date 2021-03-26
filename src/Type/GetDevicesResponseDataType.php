<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDevicesResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceQueryDataType
     */
    private $device;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceQueryDataType|array $device
     */
    public function __construct($device = null)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceQueryDataType|array $device
     */
    public static function create($device = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceQueryDataType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceQueryDataType $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }


}

