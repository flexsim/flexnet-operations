<?php

namespace Flexsim\FlexnetOperations\Type;

class UsageHistoryDataType
{

    /**
     * @var \DateTimeInterface
     */
    private $updateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $serverIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $deviceIdentifier;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    private $hostTypeName;

    /**
     * @var string
     */
    private $deviceServedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType
     */
    private $featureData;

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
     * Constructor
     *
     * @var \DateTimeInterface $updateTime
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $alias
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var string $deviceServedStatus
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @var string $machineType
     * @var string $vmName
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     */
    public function __construct(\DateTimeInterface $updateTime, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier = null, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null, string $alias = null, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, string $deviceServedStatus = null, $featureData = null, string $machineType = null, string $vmName = null, \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo = null, \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary = null)
    {
        $this->updateTime = $updateTime;
        $this->serverIdentifier = $serverIdentifier;
        $this->deviceIdentifier = $deviceIdentifier;
        $this->alias = $alias;
        $this->hostTypeName = $hostTypeName;
        $this->deviceServedStatus = $deviceServedStatus;
        $this->featureData = $featureData;
        $this->machineType = $machineType;
        $this->vmName = $vmName;
        $this->vmInfo = $vmInfo;
        $this->vendorDictionary = $vendorDictionary;
    }

    /**
     * create a new instance of this class
     *
     * @var \DateTimeInterface $updateTime
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier
     * @var string $alias
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName
     * @var string $deviceServedStatus
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array $featureData
     * @var string $machineType
     * @var string $vmName
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo
     * @var \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary
     */
    public static function create(\DateTimeInterface $updateTime, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier = null, \Flexsim\FlexnetOperations\Type\DeviceIdentifier $deviceIdentifier = null, string $alias = null, \Flexsim\FlexnetOperations\Type\HostTypeIdentifier $hostTypeName = null, string $deviceServedStatus = null, $featureData = null, string $machineType = null, string $vmName = null, \Flexsim\FlexnetOperations\Type\DictionaryType $vmInfo = null, \Flexsim\FlexnetOperations\Type\DictionaryType $vendorDictionary = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param \DateTimeInterface $updateTime
     * @return $this
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getServerIdentifier()
    {
        return $this->serverIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @return $this
     */
    public function setServerIdentifier($serverIdentifier)
    {
        $this->serverIdentifier = $serverIdentifier;
        return $this;
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


}

