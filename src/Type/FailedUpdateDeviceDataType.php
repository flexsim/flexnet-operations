<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateDeviceDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType
     */
    private $device;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateDevDataType $device = null, string $reason = null)
    {
        $this->device = $device;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateDevDataType $device = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateDevDataType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateDevDataType $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

