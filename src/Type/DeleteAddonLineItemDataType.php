<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteAddonLineItemDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $deviceIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType
     */
    private $lineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType $lineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType $lineItem)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->lineItem = $lineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType $lineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier, \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType $lineItem)
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
     * @return \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteLineItemDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }


}

