<?php

namespace Flexsim\FlexnetOperations\Type;

class ReturnHostType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $hostIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $targetHostIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $targetHostIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $targetHostIdentifier = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->targetHostIdentifier = $targetHostIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $targetHostIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $hostIdentifier, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $targetHostIdentifier = null)
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getTargetHostIdentifier()
    {
        return $this->targetHostIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $targetHostIdentifier
     * @return $this
     */
    public function setTargetHostIdentifier($targetHostIdentifier)
    {
        $this->targetHostIdentifier = $targetHostIdentifier;
        return $this;
    }
}
