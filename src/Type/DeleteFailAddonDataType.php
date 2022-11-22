<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteFailAddonDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType  $lineItem
     * @param  string  $reason
     */
    public function __construct(DeviceIdentifier $deviceIdentifier = null, DeleteLineItemDataType $lineItem = null, string $reason = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->lineItem = $lineItem;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType  $lineItem
     * @param  string  $reason
     */
    public static function create(DeviceIdentifier $deviceIdentifier = null, DeleteLineItemDataType $lineItem = null, string $reason = null)
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
     * @return \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType  $lineItem
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
