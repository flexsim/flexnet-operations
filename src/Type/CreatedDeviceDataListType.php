<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedDeviceDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array
     */
    protected $deviceIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array $deviceIdentifier
     */
    public function __construct($deviceIdentifier = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array $deviceIdentifier
     */
    public static function create($deviceIdentifier = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;

        return $this;
    }
}
