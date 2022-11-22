<?php

namespace Flexsim\FlexnetOperations\Type;

class SetDeviceStatusType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var string
     */
    protected $status;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $status
     */
    public function __construct(DeviceIdentifier $deviceIdentifier, string $status)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->status = $status;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $status
     */
    public static function create(DeviceIdentifier $deviceIdentifier, string $status)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param  string  $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
