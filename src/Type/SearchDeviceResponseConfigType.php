<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchDeviceResponseConfigType extends FlexnetType
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
    protected $hasLicense;

    /**
     * @var bool
     */
    protected $bufferLicense;

    /**
     * @var bool
     */
    protected $addOnLicense;

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
    protected $addOnEntitlementId;

    /**
     * @var bool
     */
    protected $hasUpdates;

    /**
     * Constructor
     *
     * @param bool $name
     * @param bool $description
     * @param bool $status
     * @param bool $servedStatus
     * @param bool $hostTypeName
     * @param bool $hosted
     * @param bool $soldTo
     * @param bool $hasLicense
     * @param bool $bufferLicense
     * @param bool $addOnLicense
     * @param bool $publisherIdentity
     * @param bool $parent
     * @param bool $machineType
     * @param bool $vmDetails
     * @param bool $userInfo
     * @param bool $lastRequestTime
     * @param bool $lastSyncTime
     * @param bool $addOnActivationId
     * @param bool $addOnCounts
     * @param bool $addOnProduct
     * @param bool $addOnProductLine
     * @param bool $addOnPartNumber
     * @param bool $addOnEntitlementId
     * @param bool $hasUpdates
     */
    public function __construct(bool $name = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $hosted = null, bool $soldTo = null, bool $hasLicense = null, bool $bufferLicense = null, bool $addOnLicense = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $userInfo = null, bool $lastRequestTime = null, bool $lastSyncTime = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnProductLine = null, bool $addOnPartNumber = null, bool $addOnEntitlementId = null, bool $hasUpdates = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->hostTypeName = $hostTypeName;
        $this->hosted = $hosted;
        $this->soldTo = $soldTo;
        $this->hasLicense = $hasLicense;
        $this->bufferLicense = $bufferLicense;
        $this->addOnLicense = $addOnLicense;
        $this->publisherIdentity = $publisherIdentity;
        $this->parent = $parent;
        $this->machineType = $machineType;
        $this->vmDetails = $vmDetails;
        $this->userInfo = $userInfo;
        $this->lastRequestTime = $lastRequestTime;
        $this->lastSyncTime = $lastSyncTime;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnCounts = $addOnCounts;
        $this->addOnProduct = $addOnProduct;
        $this->addOnProductLine = $addOnProductLine;
        $this->addOnPartNumber = $addOnPartNumber;
        $this->addOnEntitlementId = $addOnEntitlementId;
        $this->hasUpdates = $hasUpdates;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $name
     * @param bool $description
     * @param bool $status
     * @param bool $servedStatus
     * @param bool $hostTypeName
     * @param bool $hosted
     * @param bool $soldTo
     * @param bool $hasLicense
     * @param bool $bufferLicense
     * @param bool $addOnLicense
     * @param bool $publisherIdentity
     * @param bool $parent
     * @param bool $machineType
     * @param bool $vmDetails
     * @param bool $userInfo
     * @param bool $lastRequestTime
     * @param bool $lastSyncTime
     * @param bool $addOnActivationId
     * @param bool $addOnCounts
     * @param bool $addOnProduct
     * @param bool $addOnProductLine
     * @param bool $addOnPartNumber
     * @param bool $addOnEntitlementId
     * @param bool $hasUpdates
     */
    public static function create(bool $name = null, bool $description = null, bool $status = null, bool $servedStatus = null, bool $hostTypeName = null, bool $hosted = null, bool $soldTo = null, bool $hasLicense = null, bool $bufferLicense = null, bool $addOnLicense = null, bool $publisherIdentity = null, bool $parent = null, bool $machineType = null, bool $vmDetails = null, bool $userInfo = null, bool $lastRequestTime = null, bool $lastSyncTime = null, bool $addOnActivationId = null, bool $addOnCounts = null, bool $addOnProduct = null, bool $addOnProductLine = null, bool $addOnPartNumber = null, bool $addOnEntitlementId = null, bool $hasUpdates = null)
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
    public function getHasUpdates()
    {
        return $this->hasUpdates;
    }

    /**
     * @param bool $hasUpdates
     * @return $this
     */
    public function setHasUpdates($hasUpdates)
    {
        $this->hasUpdates = $hasUpdates;

        return $this;
    }
}
