<?php

namespace Flexsim\FlexnetOperations\Type;

class CapabilityRequestType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var int
     */
    protected $lastUpdateTime;

    /**
     * @var bool
     */
    protected $force;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionary
     */
    protected $vendorDictionary;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkLineItemDataType
     */
    protected $lineItem;

    /**
     * @var bool
     */
    protected $bufferLicense;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  int  $lastUpdateTime
     * @param  bool  $force
     * @param  \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionary  $vendorDictionary
     * @param  \Flexsim\FlexnetOperations\Type\LinkLineItemDataType|array  $lineItem
     * @param  bool  $bufferLicense
     */
    public function __construct(DeviceIdentifier $deviceIdentifier, int $lastUpdateTime = null, bool $force = null, GenerateCapabilityResponseDictionary $vendorDictionary = null, $lineItem = null, bool $bufferLicense = null)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->lastUpdateTime = $lastUpdateTime;
        $this->force = $force;
        $this->vendorDictionary = $vendorDictionary;
        $this->lineItem = $lineItem;
        $this->bufferLicense = $bufferLicense;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  int  $lastUpdateTime
     * @param  bool  $force
     * @param  \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionary  $vendorDictionary
     * @param  \Flexsim\FlexnetOperations\Type\LinkLineItemDataType|array  $lineItem
     * @param  bool  $bufferLicense
     */
    public static function create(DeviceIdentifier $deviceIdentifier, int $lastUpdateTime = null, bool $force = null, GenerateCapabilityResponseDictionary $vendorDictionary = null, $lineItem = null, bool $bufferLicense = null)
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
     * @return int
     */
    public function getLastUpdateTime()
    {
        return $this->lastUpdateTime;
    }

    /**
     * @param  int  $lastUpdateTime
     * @return $this
     */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param  bool  $force
     * @return $this
     */
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionary
     */
    public function getVendorDictionary()
    {
        return $this->vendorDictionary;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionary  $vendorDictionary
     * @return $this
     */
    public function setVendorDictionary($vendorDictionary)
    {
        $this->vendorDictionary = $vendorDictionary;

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
     * @param  \Flexsim\FlexnetOperations\Type\LinkLineItemDataType  $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBufferLicense()
    {
        return $this->bufferLicense;
    }

    /**
     * @param  bool  $bufferLicense
     * @return $this
     */
    public function setBufferLicense($bufferLicense)
    {
        $this->bufferLicense = $bufferLicense;

        return $this;
    }
}
