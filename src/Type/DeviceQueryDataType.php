<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceQueryDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $deviceIdentifier;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    private $hostTypeName;

    /**
     * @var string
     */
    private $deviceStatus;

    /**
     * @var string
     */
    private $deviceServedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType
     */
    private $channelPartners;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToType
     */
    private $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductPKType
     */
    private $preBuiltProduct;

    /**
     * @var bool
     */
    private $hasPrebuiltLicense;

    /**
     * @var string
     */
    private $prebuiltLicense;

    /**
     * @var bool
     */
    private $hasAddonLicense;

    /**
     * @var string
     */
    private $addonLicense;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier
     */
    private $publisherIdName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType
     */
    private $addonLineItemData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType
     */
    private $featureData;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $parentIdentifier;

    /**
     * @var string
     */
    private $machineType;

    /**
     * @var string
     */
    private $vmName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    private $vmInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType
     */
    private $vendorDictionary;

    /**
     * @var string
     */
    private $deviceUser;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $deviceUserIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToAcctNameType
     */
    private $soldToAcctName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToOrgNameType
     */
    private $soldToOrgName;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $alias
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var string $deviceStatus
     * @var string $deviceServedStatus
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct
     * @var bool $hasPrebuiltLicense
     * @var string $prebuiltLicense
     * @var bool $hasAddonLicense
     * @var string $addonLicense
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType|array $addonLineItemData
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier
     * @var string $machineType
     * @var string $vmName
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     * @var string $deviceUser
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier
     * @var \Flexsim\FlexnetOperations\Type\SoldToAcctNameType|\Flexsim\FlexnetOperations\Type\SoldToOrgNameType $soldToAcctName this method is backwards compatible so you may also pass $soldToOrgName
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
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $alias
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var string $deviceStatus
     * @var string $deviceServedStatus
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType $channelPartners
     * @var \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\ProductPKType $preBuiltProduct
     * @var bool $hasPrebuiltLicense
     * @var string $prebuiltLicense
     * @var bool $hasAddonLicense
     * @var string $addonLicense
     * @var \Flexsim\FlexnetOperations\Type\PublisherIdentifier $publisherIdName
     * @var \Flexsim\FlexnetOperations\Type\AddonLineItemDataDataType|array $addonLineItemData
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $parentIdentifier
     * @var string $machineType
     * @var string $vmName
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     * @var string $deviceUser
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $deviceUserIdentifier
     * @var \Flexsim\FlexnetOperations\Type\SoldToAcctNameType|\Flexsim\FlexnetOperations\Type\SoldToOrgNameType $soldToAcctName this method is backwards compatible so you may also pass $soldToOrgName
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
