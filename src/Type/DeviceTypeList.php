<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceTypeList extends FlexnetType
{
    /**
     * @var string
     */
    protected $deviceType;

    /**
     * Constructor
     *
     * @param  string  $deviceType
     */
    public function __construct(string $deviceType)
    {
        $this->deviceType = $deviceType;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $deviceType
     */
    public static function create(string $deviceType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param  string  $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;

        return $this;
    }
}
