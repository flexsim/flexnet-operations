<?php

namespace Flexsim\FlexnetOperations\Type;

class ObsoleteHostType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $hostIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getHostIdentifier()
    {
        return $this->hostIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier
     * @return $this
     */
    public function setHostIdentifier($hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;

        return $this;
    }
}
