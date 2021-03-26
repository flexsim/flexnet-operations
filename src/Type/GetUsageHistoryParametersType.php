<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageHistoryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $updateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    private $serverUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $serverId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    private $deviceUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $deviceId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $alias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $hostTypeName;

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
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType
     */
    private $machineType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $updateTime
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $deviceUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DateTimeQueryType $updateTime = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $deviceUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null)
    {
        $this->updateTime = $updateTime;
        $this->serverUniqueId = $serverUniqueId;
        $this->serverId = $serverId;
        $this->deviceUniqueId = $deviceUniqueId;
        $this->deviceId = $deviceId;
        $this->alias = $alias;
        $this->hostTypeName = $hostTypeName;
        $this->featureName = $featureName;
        $this->featureVersion = $featureVersion;
        $this->featureCount = $featureCount;
        $this->featureOverage = $featureOverage;
        $this->machineType = $machineType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $updateTime
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $deviceUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage
     * @var \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DateTimeQueryType $updateTime = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $deviceUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $deviceId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $alias = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $hostTypeName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureVersion = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $featureOverage = null, \Flexsim\FlexnetOperations\Type\DeviceMachineTypeQueryType $machineType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $updateTime
     * @return $this
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getServerUniqueId()
    {
        return $this->serverUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @return $this
     */
    public function setServerUniqueId($serverUniqueId)
    {
        $this->serverUniqueId = $serverUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getDeviceUniqueId()
    {
        return $this->deviceUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $deviceUniqueId
     * @return $this
     */
    public function setDeviceUniqueId($deviceUniqueId)
    {
        $this->deviceUniqueId = $deviceUniqueId;
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


}

