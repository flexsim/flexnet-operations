<?php

namespace Flexsim\FlexnetOperations\Type;

class v2DeviceResponseConfigRequestType
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
    private $addOnExpirationDateOverride;

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
     * @var bool
     */
    private $deviceUser;

    /**
     * @var bool
     */
    private $addOnCreatedDate;

    /**
     * @var bool
     */
    private $addOnLastModifiedDate;

    /**
     * @var bool
     */
    private $updates;

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
     * @var bool $preBuiltLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnLicense
     * @var bool $addOnExpirationDateOverride
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     * @var bool $deviceUser
     * @var bool $addOnCreatedDate
     * @var bool $addOnLastModifiedDate
     * @var bool $updates
     */
    public function __construct(
        bool $alias = null,
        bool $description = null,
        bool $status = null,
        bool $servedStatus = null,
        bool $hostTypeName = null,
        bool $soldTo = null,
        bool $channelPartners = null,
        bool $preBuiltLicense = null,
        bool $addOnActivationId = null,
        bool $addOnCounts = null,
        bool $addOnProduct = null,
        bool $addOnLicense = null,
        bool $addOnExpirationDateOverride = null,
        bool $publisherIdentity = null,
        bool $parent = null,
        bool $machineType = null,
        bool $vmDetails = null,
        bool $vmInfo = null,
        bool $vendorDictionary = null,
        bool $deviceUser = null,
        bool $addOnCreatedDate = null,
        bool $addOnLastModifiedDate = null,
        bool $updates = null
    ) {
        $this->alias = $alias;
        $this->description = $description;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->hostTypeName = $hostTypeName;
        $this->soldTo = $soldTo;
        $this->channelPartners = $channelPartners;
        $this->preBuiltLicense = $preBuiltLicense;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnCounts = $addOnCounts;
        $this->addOnProduct = $addOnProduct;
        $this->addOnLicense = $addOnLicense;
        $this->addOnExpirationDateOverride = $addOnExpirationDateOverride;
        $this->publisherIdentity = $publisherIdentity;
        $this->parent = $parent;
        $this->machineType = $machineType;
        $this->vmDetails = $vmDetails;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
        $this->deviceUser = $deviceUser;
        $this->addOnCreatedDate = $addOnCreatedDate;
        $this->addOnLastModifiedDate = $addOnLastModifiedDate;
        $this->updates = $updates;
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
     * @var bool $preBuiltLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnLicense
     * @var bool $addOnExpirationDateOverride
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     * @var bool $deviceUser
     * @var bool $addOnCreatedDate
     * @var bool $addOnLastModifiedDate
     * @var bool $updates
     */
    public static function create(
        bool $alias = null,
        bool $description = null,
        bool $status = null,
        bool $servedStatus = null,
        bool $hostTypeName = null,
        bool $soldTo = null,
        bool $channelPartners = null,
        bool $preBuiltLicense = null,
        bool $addOnActivationId = null,
        bool $addOnCounts = null,
        bool $addOnProduct = null,
        bool $addOnLicense = null,
        bool $addOnExpirationDateOverride = null,
        bool $publisherIdentity = null,
        bool $parent = null,
        bool $machineType = null,
        bool $vmDetails = null,
        bool $vmInfo = null,
        bool $vendorDictionary = null,
        bool $deviceUser = null,
        bool $addOnCreatedDate = null,
        bool $addOnLastModifiedDate = null,
        bool $updates = null
    ) {
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
    public function getAddOnExpirationDateOverride()
    {
        return $this->addOnExpirationDateOverride;
    }

    /**
     * @param bool $addOnExpirationDateOverride
     * @return $this
     */
    public function setAddOnExpirationDateOverride($addOnExpirationDateOverride)
    {
        $this->addOnExpirationDateOverride = $addOnExpirationDateOverride;
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

    /**
     * @return bool
     */
    public function getDeviceUser()
    {
        return $this->deviceUser;
    }

    /**
     * @param bool $deviceUser
     * @return $this
     */
    public function setDeviceUser($deviceUser)
    {
        $this->deviceUser = $deviceUser;
        return $this;
    }


    /**
     * @return bool
     */
    public function getAddOnCreatedDate()
    {
        return $this->addOnCreatedDate;
    }

    /**
     * @param bool $addOnCreatedDate
     * @return $this
     */
    public function setAddOnCreatedDate($addOnCreatedDate)
    {
        $this->addOnCreatedDate = $addOnCreatedDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnLastModifiedDate()
    {
        return $this->addOnLastModifiedDate;
    }

    /**
     * @param bool $addOnLastModifiedDate
     * @return $this
     */
    public function setAddOnLastModifiedDate($addOnLastModifiedDate)
    {
        $this->addOnLastModifiedDate = $addOnLastModifiedDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * @param bool $updates
     * @return $this
     */
    public function setUpdates($updates)
    {
        $this->updates = $updates;
        return $this;
    }
}
