<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkFailAddonDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkLineItemDataType
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LinkLineItemDataType $lineItem
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null, \Flexsim\FlexnetOperations\Type\LinkLineItemDataType $lineItem = null, string $reason = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @param \Flexsim\FlexnetOperations\Type\LinkLineItemDataType $lineItem
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null, \Flexsim\FlexnetOperations\Type\LinkLineItemDataType $lineItem = null, string $reason = null)
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
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @return $this
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkLineItemDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;

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
