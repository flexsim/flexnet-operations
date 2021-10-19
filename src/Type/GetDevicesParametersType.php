<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDevicesParametersType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $alias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    protected $deviceIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $parentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    protected $parentIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $hostTypeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $currentOwnerName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    protected $organizationUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceStateQueryType
     */
    protected $status;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType
     */
    protected $servedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $preBuiltProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $preBuiltProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnActivationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $addOnProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $featureName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $featureVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $featureCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $featureOverage;

    /**
     * @var bool
     */
    protected $isServer;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceTypeList
     */
    protected $deviceTypes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    protected $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType
     */
    protected $machineType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $vmName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $userString;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @param \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status
     * @param \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @param bool $isServer
     * @param \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @param \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status = null, \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, bool $isServer = null, \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString = null)
    {
        $this->alias = $alias;
        $this->deviceId = $deviceId;
        $this->deviceIdType = $deviceIdType;
        $this->parentId = $parentId;
        $this->parentIdType = $parentIdType;
        $this->hostTypeName = $hostTypeName;
        $this->soldTo = $soldTo;
        $this->currentOwnerName = $currentOwnerName;
        $this->organizationUnitName = $organizationUnitName;
        $this->description = $description;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->preBuiltProductName = $preBuiltProductName;
        $this->preBuiltProductVersion = $preBuiltProductVersion;
        $this->addOnActivationId = $addOnActivationId;
        $this->addOnProductName = $addOnProductName;
        $this->addOnProductVersion = $addOnProductVersion;
        $this->featureName = $featureName;
        $this->featureVersion = $featureVersion;
        $this->featureCount = $featureCount;
        $this->featureOverage = $featureOverage;
        $this->isServer = $isServer;
        $this->deviceTypes = $deviceTypes;
        $this->customAttributes = $customAttributes;
        $this->machineType = $machineType;
        $this->vmName = $vmName;
        $this->userString = $userString;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @param \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status
     * @param \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @param bool $isServer
     * @param \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @param \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status = null, \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, bool $isServer = null, \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    public function getDeviceIdType()
    {
        return $this->deviceIdType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @return $this
     */
    public function setDeviceIdType($deviceIdType)
    {
        $this->deviceIdType = $deviceIdType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    public function getParentIdType()
    {
        return $this->parentIdType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType
     * @return $this
     */
    public function setParentIdType($parentIdType)
    {
        $this->parentIdType = $parentIdType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @return $this
     */
    public function setHostTypeName($hostTypeName)
    {
        $this->hostTypeName = $hostTypeName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCurrentOwnerName()
    {
        return $this->currentOwnerName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @return $this
     */
    public function setCurrentOwnerName($currentOwnerName)
    {
        $this->currentOwnerName = $currentOwnerName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    public function getOrganizationUnitName()
    {
        return $this->organizationUnitName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @return $this
     */
    public function setOrganizationUnitName($organizationUnitName)
    {
        $this->organizationUnitName = $organizationUnitName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceStateQueryType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType
     */
    public function getServedStatus()
    {
        return $this->servedStatus;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus
     * @return $this
     */
    public function setServedStatus($servedStatus)
    {
        $this->servedStatus = $servedStatus;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPreBuiltProductName()
    {
        return $this->preBuiltProductName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName
     * @return $this
     */
    public function setPreBuiltProductName($preBuiltProductName)
    {
        $this->preBuiltProductName = $preBuiltProductName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPreBuiltProductVersion()
    {
        return $this->preBuiltProductVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion
     * @return $this
     */
    public function setPreBuiltProductVersion($preBuiltProductVersion)
    {
        $this->preBuiltProductVersion = $preBuiltProductVersion;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnActivationId()
    {
        return $this->addOnActivationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @return $this
     */
    public function setAddOnActivationId($addOnActivationId)
    {
        $this->addOnActivationId = $addOnActivationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnProductName()
    {
        return $this->addOnProductName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @return $this
     */
    public function setAddOnProductName($addOnProductName)
    {
        $this->addOnProductName = $addOnProductName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAddOnProductVersion()
    {
        return $this->addOnProductVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @return $this
     */
    public function setAddOnProductVersion($addOnProductVersion)
    {
        $this->addOnProductVersion = $addOnProductVersion;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFeatureVersion()
    {
        return $this->featureVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @return $this
     */
    public function setFeatureVersion($featureVersion)
    {
        $this->featureVersion = $featureVersion;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getFeatureCount()
    {
        return $this->featureCount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @return $this
     */
    public function setFeatureCount($featureCount)
    {
        $this->featureCount = $featureCount;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getFeatureOverage()
    {
        return $this->featureOverage;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @return $this
     */
    public function setFeatureOverage($featureOverage)
    {
        $this->featureOverage = $featureOverage;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsServer()
    {
        return $this->isServer;
    }

    /**
     * @param bool $isServer
     * @return $this
     */
    public function setIsServer($isServer)
    {
        $this->isServer = $isServer;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceTypeList
     */
    public function getDeviceTypes()
    {
        return $this->deviceTypes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes
     * @return $this
     */
    public function setDeviceTypes($deviceTypes)
    {
        $this->deviceTypes = $deviceTypes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType
     */
    public function getMachineType()
    {
        return $this->machineType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     * @return $this
     */
    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getVmName()
    {
        return $this->vmName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName
     * @return $this
     */
    public function setVmName($vmName)
    {
        $this->vmName = $vmName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getUserString()
    {
        return $this->userString;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userString
     * @return $this
     */
    public function setUserString($userString)
    {
        $this->userString = $userString;
        return $this;
    }
}
