<?php

namespace Flexsim\FlexnetOperations\Type;

class GeneratePrebuiltLicenseDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array 
     */
    private $deviceIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array $deviceIdentifier
     */
    public function __construct($deviceIdentifier = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier|array $deviceIdentifier
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
