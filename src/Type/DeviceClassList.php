<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceClassList
{

    /**
     * @var string
     */
    private $deviceClass;

    /**
     * Constructor
     *
     * @var string $deviceClass
     */
    public function __construct(string $deviceClass)
    {
        $this->deviceClass = $deviceClass;
    }

    /**
     * create a new instance of this class
     *
     * @var string $deviceClass
     */
    public static function create(string $deviceClass)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getDeviceClass()
    {
        return $this->deviceClass;
    }

    /**
     * @param string $deviceClass
     * @return $this
     */
    public function setDeviceClass($deviceClass)
    {
        $this->deviceClass = $deviceClass;
        return $this;
    }


}

