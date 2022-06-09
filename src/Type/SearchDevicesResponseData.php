<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchDevicesResponseData extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchDeviceResponseData
     */
    protected $device;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchDeviceResponseData|array $device
     */
    public function __construct($device = null)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchDeviceResponseData|array $device
     */
    public static function create($device = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchDeviceResponseData
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchDeviceResponseData $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }
}
