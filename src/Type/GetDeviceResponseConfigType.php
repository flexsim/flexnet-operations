<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeviceResponseConfigType extends FlexnetType
{

    /**
     * @var bool
     */
    protected $name;

    /**
     * @var bool
     */
    protected $description;

    /**
     * @var bool
     */
    protected $status;

    /**
     * @var bool
     */
    protected $servedStatus;

    /**
     * @var bool
     */
    protected $hostTypeName;

    /**
     * @var bool
     */
    protected $hosted;

    /**
     * @var bool
     */
    protected $soldTo;

    /**
     * @var bool
     */
    protected $baseProduct;

    /**
     * @var bool
     */
    protected $hasLicense;

    /**
     * @var bool
     */
    protected $bufferLicense;

    /**
     * @var bool
     */
    protected $addOnActivationId;

    /**
     * @var bool
     */
    protected $addOnCounts;

    /**
     * @var bool
     */
    protected $addOnProduct;

    /**
     * @var bool
     */
    protected $addOnProductLine;

    /**
     * @var bool
     */
    protected $addOnPartNumber;

    /**
     * @var bool
     */
    protected $addOnLicense;

    /**
     * @var bool
     */
    protected $addOnExpirationDateOverride;

    /**
     * @var bool
     */
    protected $addOnEntitlementExpirationDate;

    /**
     * @var bool
     */
    protected $addOnCreatedDate;

    /**
     * @var bool
     */
    protected $addOnLastModifiedDate;

    /**
     * @var bool
     */
    protected $addOnEntitlementId;

    /**
     * @var bool
     */
    protected $addOnState;

    /**
     * @var bool
     */
    protected $addOnLicenseModel;

    /**
     * @var bool
     */
    protected $features;

    /**
     * @var bool
     */
    protected $publisherIdentity;

    /**
     * @var bool
     */
    protected $parent;

    /**
     * @var bool
     */
    protected $machineType;

    /**
     * @var bool
     */
    protected $vmDetails;

    /**
     * @var bool
     */
    protected $vmInfo;

    /**
     * @var bool
     */
    protected $vendorDictionary;

    /**
     * @var bool
     */
    protected $updates;

    /**
     * @var bool
     */
    protected $userInfo;

    /**
     * @var bool
     */
    protected $lastRequestTime;

    /**
     * @var bool
     */
    protected $lastSyncTime;

    /**
     * Constructor
     *
     * @var bool $name
     * @var bool $description
     * @var bool $status
     * @var bool $servedStatus
     * @var bool $hostTypeName
     * @var bool $hosted
     * @var bool $soldTo
     * @var bool $baseProduct
     * @var bool $hasLicense
     * @var bool $bufferLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnProductLine
     * @var bool $addOnPartNumber
     * @var bool $addOnLicense
     * @var bool $addOnExpirationDateOverride
     * @var bool $addOnEntitlementExpirationDate
     * @var bool $addOnCreatedDate
     * @var bool $addOnLastModifiedDate
     * @var bool $addOnEntitlementId
     * @var bool $addOnState
     * @var bool $addOnLicenseModel
     * @var bool $features
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     * @var bool $updates
     * @var bool $userInfo
     * @var bool $lastRequestTime
     * @var bool $lastSyncTime
     */
    public function __construct(bool $name = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $hosted = null, bool $soldTo = null, bool $baseProduct = null, bool $hasLicense = null, bool $bufferLicense = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnProductLine = null, bool $addOnPartNumber = null, bool $addOnLicense = null, bool $addOnExpirationDateOverride = null, bool $addOnEntitlementExpirationDate = null, bool $addOnCreatedDate = null, bool $addOnLastModifiedDate = null, bool $addOnEntitlementId = null, bool $addOnState = null, bool $addOnLicenseModel = null, bool $features = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null, bool $updates = null, bool $userInfo = null, bool $lastRequestTime = null, bool $lastSyncTime = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->hostTypeName = $hostTypeName;
        $this->hosted = $hosted;
        $this->soldTo = $soldTo;
        $this->baseProduct = $baseProduct;
        $this->hasLicense = $hasLicense;
        $this->bufferLicense = $bufferLicense;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnCounts = $addOnCounts;
        $this->addOnProduct = $addOnProduct;
        $this->addOnProductLine = $addOnProductLine;
        $this->addOnPartNumber = $addOnPartNumber;
        $this->addOnLicense = $addOnLicense;
        $this->addOnExpirationDateOverride = $addOnExpirationDateOverride;
        $this->addOnEntitlementExpirationDate = $addOnEntitlementExpirationDate;
        $this->addOnCreatedDate = $addOnCreatedDate;
        $this->addOnLastModifiedDate = $addOnLastModifiedDate;
        $this->addOnEntitlementId = $addOnEntitlementId;
        $this->addOnState = $addOnState;
        $this->addOnLicenseModel = $addOnLicenseModel;
        $this->features = $features;
        $this->publisherIdentity = $publisherIdentity;
        $this->parent = $parent;
        $this->machineType = $machineType;
        $this->vmDetails = $vmDetails;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
        $this->updates = $updates;
        $this->userInfo = $userInfo;
        $this->lastRequestTime = $lastRequestTime;
        $this->lastSyncTime = $lastSyncTime;
    }

    /**
     * create a new instance of this class
     *
     * @var bool $name
     * @var bool $description
     * @var bool $status
     * @var bool $servedStatus
     * @var bool $hostTypeName
     * @var bool $hosted
     * @var bool $soldTo
     * @var bool $baseProduct
     * @var bool $hasLicense
     * @var bool $bufferLicense
     * @var bool $addOnActivationId
     * @var bool $addOnCounts
     * @var bool $addOnProduct
     * @var bool $addOnProductLine
     * @var bool $addOnPartNumber
     * @var bool $addOnLicense
     * @var bool $addOnExpirationDateOverride
     * @var bool $addOnEntitlementExpirationDate
     * @var bool $addOnCreatedDate
     * @var bool $addOnLastModifiedDate
     * @var bool $addOnEntitlementId
     * @var bool $addOnState
     * @var bool $addOnLicenseModel
     * @var bool $features
     * @var bool $publisherIdentity
     * @var bool $parent
     * @var bool $machineType
     * @var bool $vmDetails
     * @var bool $vmInfo
     * @var bool $vendorDictionary
     * @var bool $updates
     * @var bool $userInfo
     * @var bool $lastRequestTime
     * @var bool $lastSyncTime
     */
    public static function create(bool $name = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $hosted = null, bool $soldTo = null, bool $baseProduct = null, bool $hasLicense = null, bool $bufferLicense = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnProductLine = null, bool $addOnPartNumber = null, bool $addOnLicense = null, bool $addOnExpirationDateOverride = null, bool $addOnEntitlementExpirationDate = null, bool $addOnCreatedDate = null, bool $addOnLastModifiedDate = null, bool $addOnEntitlementId = null, bool $addOnState = null, bool $addOnLicenseModel = null, bool $features = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $vmInfo = null, bool $vendorDictionary = null, bool $updates = null, bool $userInfo = null, bool $lastRequestTime = null, bool $lastSyncTime = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param bool $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function getHosted()
    {
        return $this->hosted;
    }

    /**
     * @param bool $hosted
     * @return $this
     */
    public function setHosted($hosted)
    {
        $this->hosted = $hosted;
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
    public function getBaseProduct()
    {
        return $this->baseProduct;
    }

    /**
     * @param bool $baseProduct
     * @return $this
     */
    public function setBaseProduct($baseProduct)
    {
        $this->baseProduct = $baseProduct;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasLicense()
    {
        return $this->hasLicense;
    }

    /**
     * @param bool $hasLicense
     * @return $this
     */
    public function setHasLicense($hasLicense)
    {
        $this->hasLicense = $hasLicense;
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
     * @param bool $bufferLicense
     * @return $this
     */
    public function setBufferLicense($bufferLicense)
    {
        $this->bufferLicense = $bufferLicense;
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
    public function getAddOnProductLine()
    {
        return $this->addOnProductLine;
    }

    /**
     * @param bool $addOnProductLine
     * @return $this
     */
    public function setAddOnProductLine($addOnProductLine)
    {
        $this->addOnProductLine = $addOnProductLine;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnPartNumber()
    {
        return $this->addOnPartNumber;
    }

    /**
     * @param bool $addOnPartNumber
     * @return $this
     */
    public function setAddOnPartNumber($addOnPartNumber)
    {
        $this->addOnPartNumber = $addOnPartNumber;
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
    public function getAddOnEntitlementExpirationDate()
    {
        return $this->addOnEntitlementExpirationDate;
    }

    /**
     * @param bool $addOnEntitlementExpirationDate
     * @return $this
     */
    public function setAddOnEntitlementExpirationDate($addOnEntitlementExpirationDate)
    {
        $this->addOnEntitlementExpirationDate = $addOnEntitlementExpirationDate;
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
    public function getAddOnEntitlementId()
    {
        return $this->addOnEntitlementId;
    }

    /**
     * @param bool $addOnEntitlementId
     * @return $this
     */
    public function setAddOnEntitlementId($addOnEntitlementId)
    {
        $this->addOnEntitlementId = $addOnEntitlementId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnState()
    {
        return $this->addOnState;
    }

    /**
     * @param bool $addOnState
     * @return $this
     */
    public function setAddOnState($addOnState)
    {
        $this->addOnState = $addOnState;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAddOnLicenseModel()
    {
        return $this->addOnLicenseModel;
    }

    /**
     * @param bool $addOnLicenseModel
     * @return $this
     */
    public function setAddOnLicenseModel($addOnLicenseModel)
    {
        $this->addOnLicenseModel = $addOnLicenseModel;
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

    /**
     * @return bool
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    /**
     * @param bool $userInfo
     * @return $this
     */
    public function setUserInfo($userInfo)
    {
        $this->userInfo = $userInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLastRequestTime()
    {
        return $this->lastRequestTime;
    }

    /**
     * @param bool $lastRequestTime
     * @return $this
     */
    public function setLastRequestTime($lastRequestTime)
    {
        $this->lastRequestTime = $lastRequestTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLastSyncTime()
    {
        return $this->lastSyncTime;
    }

    /**
     * @param bool $lastSyncTime
     * @return $this
     */
    public function setLastSyncTime($lastSyncTime)
    {
        $this->lastSyncTime = $lastSyncTime;
        return $this;
    }
}
