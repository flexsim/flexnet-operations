<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceResponseConfigRequestType
{

    /**
     * @var bool
     */
    private $alias;

    /**
     * @var bool
     */
    private $description;

    /**
     * @var bool
     */
    private $status;

    /**
     * @var bool
     */
    private $servedStatus;

    /**
     * @var bool
     */
    private $hostTypeName;

    /**
     * @var bool
     */
    private $soldTo;

    /**
     * @var bool
     */
    private $channelPartners;

    /**
     * @var bool
     */
    private $preBuiltProduct;

    /**
     * @var bool
     */
    private $preBuiltLicense;

    /**
     * @var bool
     */
    private $addOnActivationId;

    /**
     * @var bool
     */
    private $addOnCounts;

    /**
     * @var bool
     */
    private $addOnProduct;

    /**
     * @var bool
     */
    private $addOnLicense;

    /**
     * @var bool
     */
    private $features;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var bool
     */
    private $publisherIdentity;

    /**
     * @var bool
     */
    private $parent;

    /**
     * @var bool
     */
    private $machineType;

    /**
     * @var bool
     */
    private $vmDetails;

    /**
     * @var bool
     */
    private $vmInfo;

    /**
     * @var bool
     */
    private $vendorDictionary;

    /**
     * Constructor
     *
     * @var bool $alias
     * @var bool $description
     * @var bool $status
     * @var bool $servedStatus
     * @var bool $hostTypeName
     * @var bool $soldTo
     * @var bool $channelPartners
     * @var bool $preBuiltProduct
     * @var bool $preBuiltLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnLicense
     * @var bool $features
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     */
    public function __construct(bool $alias = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $soldTo = null, bool $channelPartners = null, bool $preBuiltProduct = null, bool $preBuiltLicense = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnLicense = null, bool $features = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null)
    {
        $this->alias = $alias;
        $this->description = $description;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->hostTypeName = $hostTypeName;
        $this->soldTo = $soldTo;
        $this->channelPartners = $channelPartners;
        $this->preBuiltProduct = $preBuiltProduct;
        $this->preBuiltLicense = $preBuiltLicense;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnCounts = $addOnCounts;
        $this->addOnProduct = $addOnProduct;
        $this->addOnLicense = $addOnLicense;
        $this->features = $features;
        $this->customAttributes = $customAttributes;
        $this->publisherIdentity = $publisherIdentity;
        $this->parent = $parent;
        $this->machineType = $machineType;
        $this->vmDetails = $vmDetails;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
    }

    /**
     * create a new instance of this class
     *
     * @var bool $alias
     * @var bool $description
     * @var bool $status
     * @var bool $servedStatus
     * @var bool $hostTypeName
     * @var bool $soldTo
     * @var bool $channelPartners
     * @var bool $preBuiltProduct
     * @var bool $preBuiltLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnLicense
     * @var bool $features
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     */
    public static function create(bool $alias = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $soldTo = null, bool $channelPartners = null, bool $preBuiltProduct = null, bool $preBuiltLicense = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnLicense = null, bool $features = null, \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param bool $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param bool $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return bool
     */
    public function getServedStatus()
    {
        return $this->servedStatus;
    }

    /**
     * @param bool $servedStatus
     * @return $this
     */
    public function setServedStatus($servedStatus)
    {
        $this->servedStatus = $servedStatus;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param bool $hostTypeName
     * @return $this
     */
    public function setHostTypeName($hostTypeName)
    {
        $this->hostTypeName = $hostTypeName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param bool $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getChannelPartners()
    {
        return $this->channelPartners;
    }

    /**
     * @param bool $channelPartners
     * @return $this
     */
    public function setChannelPartners($channelPartners)
    {
        $this->channelPartners = $channelPartners;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreBuiltProduct()
    {
        return $this->preBuiltProduct;
    }

    /**
     * @param bool $preBuiltProduct
     * @return $this
     */
    public function setPreBuiltProduct($preBuiltProduct)
    {
        $this->preBuiltProduct = $preBuiltProduct;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreBuiltLicense()
    {
        return $this->preBuiltLicense;
    }

    /**
     * @param bool $preBuiltLicense
     * @return $this
     */
    public function setPreBuiltLicense($preBuiltLicense)
    {
        $this->preBuiltLicense = $preBuiltLicense;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnActivationId()
    {
        return $this->addOnActivationId;
    }

    /**
     * @param bool $addOnActivationId
     * @return $this
     */
    public function setAddOnActivationId($addOnActivationId)
    {
        $this->addOnActivationId = $addOnActivationId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnCounts()
    {
        return $this->addOnCounts;
    }

    /**
     * @param bool $addOnCounts
     * @return $this
     */
    public function setAddOnCounts($addOnCounts)
    {
        $this->addOnCounts = $addOnCounts;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnProduct()
    {
        return $this->addOnProduct;
    }

    /**
     * @param bool $addOnProduct
     * @return $this
     */
    public function setAddOnProduct($addOnProduct)
    {
        $this->addOnProduct = $addOnProduct;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnLicense()
    {
        return $this->addOnLicense;
    }

    /**
     * @param bool $addOnLicense
     * @return $this
     */
    public function setAddOnLicense($addOnLicense)
    {
        $this->addOnLicense = $addOnLicense;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param bool $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPublisherIdentity()
    {
        return $this->publisherIdentity;
    }

    /**
     * @param bool $publisherIdentity
     * @return $this
     */
    public function setPublisherIdentity($publisherIdentity)
    {
        $this->publisherIdentity = $publisherIdentity;
        return $this;
    }

    /**
     * @return bool
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param bool $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMachineType()
    {
        return $this->machineType;
    }

    /**
     * @param bool $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVmDetails()
    {
        return $this->vmDetails;
    }

    /**
     * @param bool $vmDetails
     * @return $this
     */
    public function setVmDetails($vmDetails)
    {
        $this->vmDetails = $vmDetails;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVmInfo()
    {
        return $this->vmInfo;
    }

    /**
     * @param bool $vmInfo
     * @return $this
     */
    public function setVmInfo($vmInfo)
    {
        $this->vmInfo = $vmInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVendorDictionary()
    {
        return $this->vendorDictionary;
    }

    /**
     * @param bool $vendorDictionary
     * @return $this
     */
    public function setVendorDictionary($vendorDictionary)
    {
        $this->vendorDictionary = $vendorDictionary;
        return $this;
    }


}

