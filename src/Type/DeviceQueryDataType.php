<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceQueryDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    protected $hostTypeName;

    /**
     * @var string
     */
    protected $deviceStatus;

    /**
     * @var string
     */
    protected $deviceServedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    protected $channelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToType
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductPKType
     */
    protected $preBuiltProduct;

    /**
     * @var bool
     */
    protected $hasPrebuiltLicense;

    /**
     * @var string
     */
    protected $prebuiltLicense;

    /**
     * @var bool
     */
    protected $hasAddonLicense;

    /**
     * @var string
     */
    protected $addonLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    protected $publisherIdName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType
     */
    protected $addonLineItemData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType
     */
    protected $featureData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $parentIdentifier;

    /**
     * @var string
     */
    protected $machineType;

    /**
     * @var string
     */
    protected $vmName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    protected $vmInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    protected $vendorDictionary;

    /**
     * @var string
     */
    protected $deviceUser;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $deviceUserIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToAcctNameType
     */
    protected $soldToAcctName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToOrgNameType
     */
    protected $soldToOrgName;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @param string $alias
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @param string $deviceStatus
     * @param string $deviceServedStatus
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct
     * @param bool $hasPrebuiltLicense
     * @param string $prebuiltLicense
     * @param bool $hasAddonLicense
     * @param string $addonLicense
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @param \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType|array $addonLineItemData
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier
     * @param string $machineType
     * @param string $vmName
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     * @param string $deviceUser
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier
     * @param \Flexsim\FlexnetOperations\Type\SoldToAcctNameType|\Flexsim\FlexnetOperations\Type\SoldToOrgNameType $soldToAcctName this method is backwards compatible so you may also pass $soldToOrgName
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null,
        string $alias = null,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null,
        string $deviceStatus = null,
        string $deviceServedStatus = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        \Flexsim\FlexnetOperations\Type\SoldToType $soldTo = null,
        \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct = null,
        bool $hasPrebuiltLicense = null,
        string $prebuiltLicense = null,
        bool $hasAddonLicense = null,
        string $addonLicense = null,
        \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null,
        $addonLineItemData = null,
        $featureData = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier = null,
        string $machineType = null,
        string $vmName = null,
        \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo = null,
        \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary = null,
        string $deviceUser = null,
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier = null,
        $soldToAcctName = null
    ) {
        $this->deviceIdentifier = $deviceIdentifier;
        $this->alias = $alias;
        $this->description = $description;
        $this->hostTypeName = $hostTypeName;
        $this->deviceStatus = $deviceStatus;
        $this->deviceServedStatus = $deviceServedStatus;
        $this->channelPartners = $channelPartners;
        $this->soldTo = $soldTo;
        $this->preBuiltProduct = $preBuiltProduct;
        $this->hasPrebuiltLicense = $hasPrebuiltLicense;
        $this->prebuiltLicense = $prebuiltLicense;
        $this->hasAddonLicense = $hasAddonLicense;
        $this->addonLicense = $addonLicense;
        $this->publisherIdName = $publisherIdName;
        $this->addonLineItemData = $addonLineItemData;
        $this->featureData = $featureData;
        $this->customAttributes = $customAttributes;
        $this->parentIdentifier = $parentIdentifier;
        $this->machineType = $machineType;
        $this->vmName = $vmName;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
        $this->deviceUser = $deviceUser;
        $this->deviceUserIdentifier = $deviceUserIdentifier;
        $this->soldToAcctName = $soldToAcctName;
        $this->soldToOrgName = $soldToAcctName;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @param string $alias
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @param string $deviceStatus
     * @param string $deviceServedStatus
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @param \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct
     * @param bool $hasPrebuiltLicense
     * @param string $prebuiltLicense
     * @param bool $hasAddonLicense
     * @param string $addonLicense
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @param \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType|array $addonLineItemData
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier
     * @param string $machineType
     * @param string $vmName
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     * @param string $deviceUser
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier
     * @param \Flexsim\FlexnetOperations\Type\SoldToAcctNameType|\Flexsim\FlexnetOperations\Type\SoldToOrgNameType $soldToAcctName this method is backwards compatible so you may also pass $soldToOrgName
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null,
        string $alias = null,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null,
        string $deviceStatus = null,
        string $deviceServedStatus = null,
        \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners = null,
        \Flexsim\FlexnetOperations\Type\SoldToType $soldTo = null,
        \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct = null,
        bool $hasPrebuiltLicense = null,
        string $prebuiltLicense = null,
        bool $hasAddonLicense = null,
        string $addonLicense = null,
        \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName = null,
        $addonLineItemData = null,
        $featureData = null,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null,
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier = null,
        string $machineType = null,
        string $vmName = null,
        \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo = null,
        \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary = null,
        string $deviceUser = null,
        \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier = null,
        $soldToAcctName = null
    ) {
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
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @return $this
     */
    public function setHostTypeName($hostTypeName)
    {
        $this->hostTypeName = $hostTypeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceStatus()
    {
        return $this->deviceStatus;
    }

    /**
     * @param string $deviceStatus
     * @return $this
     */
    public function setDeviceStatus($deviceStatus)
    {
        $this->deviceStatus = $deviceStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceServedStatus()
    {
        return $this->deviceServedStatus;
    }

    /**
     * @param string $deviceServedStatus
     * @return $this
     */
    public function setDeviceServedStatus($deviceServedStatus)
    {
        $this->deviceServedStatus = $deviceServedStatus;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    public function getChannelPartners()
    {
        return $this->channelPartners;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @return $this
     */
    public function setChannelPartners($channelPartners)
    {
        $this->channelPartners = $channelPartners;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SoldToType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductPKType
     */
    public function getPreBuiltProduct()
    {
        return $this->preBuiltProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct
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
    public function getHasPrebuiltLicense()
    {
        return $this->hasPrebuiltLicense;
    }

    /**
     * @param bool $hasPrebuiltLicense
     * @return $this
     */
    public function setHasPrebuiltLicense($hasPrebuiltLicense)
    {
        $this->hasPrebuiltLicense = $hasPrebuiltLicense;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrebuiltLicense()
    {
        return $this->prebuiltLicense;
    }

    /**
     * @param string $prebuiltLicense
     * @return $this
     */
    public function setPrebuiltLicense($prebuiltLicense)
    {
        $this->prebuiltLicense = $prebuiltLicense;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAddonLicense()
    {
        return $this->hasAddonLicense;
    }

    /**
     * @param bool $hasAddonLicense
     * @return $this
     */
    public function setHasAddonLicense($hasAddonLicense)
    {
        $this->hasAddonLicense = $hasAddonLicense;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddonLicense()
    {
        return $this->addonLicense;
    }

    /**
     * @param string $addonLicense
     * @return $this
     */
    public function setAddonLicense($addonLicense)
    {
        $this->addonLicense = $addonLicense;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    public function getPublisherIdName()
    {
        return $this->publisherIdName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @return $this
     */
    public function setPublisherIdName($publisherIdName)
    {
        $this->publisherIdName = $publisherIdName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType
     */
    public function getAddonLineItemData()
    {
        return $this->addonLineItemData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType $addonLineItemData
     * @return $this
     */
    public function setAddonLineItemData($addonLineItemData)
    {
        $this->addonLineItemData = $addonLineItemData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureDataDataType
     */
    public function getFeatureData()
    {
        return $this->featureData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataDataType $featureData
     * @return $this
     */
    public function setFeatureData($featureData)
    {
        $this->featureData = $featureData;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getParentIdentifier()
    {
        return $this->parentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier
     * @return $this
     */
    public function setParentIdentifier($parentIdentifier)
    {
        $this->parentIdentifier = $parentIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getMachineType()
    {
        return $this->machineType;
    }

    /**
     * @param string $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;

        return $this;
    }

    /**
     * @return string
     */
    public function getVmName()
    {
        return $this->vmName;
    }

    /**
     * @param string $vmName
     * @return $this
     */
    public function setVmName($vmName)
    {
        $this->vmName = $vmName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    public function getVmInfo()
    {
        return $this->vmInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @return $this
     */
    public function setVmInfo($vmInfo)
    {
        $this->vmInfo = $vmInfo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    public function getVendorDictionary()
    {
        return $this->vendorDictionary;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     * @return $this
     */
    public function setVendorDictionary($vendorDictionary)
    {
        $this->vendorDictionary = $vendorDictionary;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceUser()
    {
        return $this->deviceUser;
    }

    /**
     * @param string $deviceUser
     * @return $this
     */
    public function setDeviceUser($deviceUser)
    {
        $this->deviceUser = $deviceUser;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getDeviceUserIdentifier()
    {
        return $this->deviceUserIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier
     * @return $this
     */
    public function setDeviceUserIdentifier($deviceUserIdentifier)
    {
        $this->deviceUserIdentifier = $deviceUserIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SoldToAcctNameType
     */
    public function getSoldToAcctName()
    {
        return $this->soldToAcctName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SoldToAcctNameType $soldToAcctName
     * @return $this
     */
    public function setSoldToAcctName($soldToAcctName)
    {
        $this->soldToAcctName = $soldToAcctName;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SoldToOrgNameType
     */
    public function getSoldToOrgName()
    {
        return $this->soldToOrgName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SoldToOrgNameType $soldToOrgName
     * @return $this
     */
    public function setSoldToOrgName($soldToOrgName)
    {
        $this->soldToOrgName = $soldToOrgName;

        return $this;
    }
}
