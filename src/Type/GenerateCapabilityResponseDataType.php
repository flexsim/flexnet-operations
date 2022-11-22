<?php

namespace Flexsim\FlexnetOperations\Type;

class GenerateCapabilityResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CapabilityResponseDataType
     */
    protected $device;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CapabilityResponseDataType|array  $device
     */
    public function __construct($device = null)
    {
        $this->device = $device;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CapabilityResponseDataType|array  $device
     */
    public static function create($device = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CapabilityResponseDataType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CapabilityResponseDataType  $device
     * @return $this
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }
}
