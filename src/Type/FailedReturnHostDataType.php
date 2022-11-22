<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedReturnHostDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $hostIdentifier;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $hostIdentifier
     * @param  string  $reason
     */
    public function __construct(DeviceIdentifier $hostIdentifier = null, string $reason = null)
    {
        $this->hostIdentifier = $hostIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $hostIdentifier
     * @param  string  $reason
     */
    public static function create(DeviceIdentifier $hostIdentifier = null, string $reason = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $hostIdentifier
     * @return $this
     */
    public function setHostIdentifier($hostIdentifier)
    {
        $this->hostIdentifier = $hostIdentifier;

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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
