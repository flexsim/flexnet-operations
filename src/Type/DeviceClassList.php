<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceClassList extends FlexnetType 
{

    /**
     * @var string
     */
    protected $deviceClass;

    /**
     * Constructor
     *
     * @param string $deviceClass
     */
    public function __construct(string $deviceClass)
    {
        $this->deviceclass = extends FlexnetType $deviceClass; extends FlexnetType 
    }

    /**
     * create a new instance of this class
     *
     * @param string $deviceClass
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
        $this->deviceclass = extends FlexnetType $deviceClass; extends FlexnetType 
        return $this;
    }


}

