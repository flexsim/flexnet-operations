<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDevicesParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $alias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    private $deviceIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $parentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType
     */
    private $parentIdType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $hostTypeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $currentOwnerName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    private $organizationUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceStateQueryType
     */
    private $status;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType
     */
    private $servedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $preBuiltProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $preBuiltProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $addOnActivationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $addOnProductName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $addOnProductVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $featureName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $featureVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    private $featureCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    private $featureOverage;

    /**
     * @var bool
     */
    private $isServer;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceTypeList
     */
    private $deviceTypes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType
     */
    private $machineType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $vmName;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status
     * @var \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @var bool $isServer
     * @var \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status = null, \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, bool $isServer = null, \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName = null)
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
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status
     * @var \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @var bool $isServer
     * @var \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $deviceIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $parentId = null, \Flexsim\FlexnetOperations\Type\DeviceIdTypeQueryType $parentIdType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $soldTo = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $currentOwnerName = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\DeviceStateQueryType $status = null, \Flexsim\FlexnetOperations\Type\DeviceServedStateQueryType $servedStatus = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $preBuiltProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnActivationId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $addOnProductVersion = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, bool $isServer = null, \Flexsim\FlexnetOperations\Type\DeviceTypeList $deviceTypes = null, \Flexsim\FlexnetOperations\Type\CustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $vmName = null)
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


}

