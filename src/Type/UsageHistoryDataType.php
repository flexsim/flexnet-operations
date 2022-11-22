<?php

namespace Flexsim\FlexnetOperations\Type;

class UsageHistoryDataType extends FlexnetType
{
    /**
     * @var \DateTimeInterface
     */
    protected $updateTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $serverIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $deviceIdentifier;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypeIdentifier
     */
    protected $hostTypeName;

    /**
     * @var string
     */
    protected $deviceServedStatus;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataDataType
     */
    protected $featureData;

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
     * Constructor
     *
     * @param  \DateTimeInterface  $updateTime
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $serverIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $alias
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
     * @param  string  $deviceServedStatus
     * @param  \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array  $featureData
     * @param  string  $machineType
     * @param  string  $vmName
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vmInfo
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vendorDictionary
     */
    public function __construct(\DateTimeInterface $updateTime, DeviceIdentifier $serverIdentifier = null, DeviceIdentifier $deviceIdentifier = null, string $alias = null, HostTypeIdentifier $hostTypeName = null, string $deviceServedStatus = null, $featureData = null, string $machineType = null, string $vmName = null, DictionaryType $vmInfo = null, DictionaryType $vendorDictionary = null)
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
     * @param  \DateTimeInterface  $updateTime
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $serverIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
     * @param  string  $alias
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
     * @param  string  $deviceServedStatus
     * @param  \Flexsim\FlexnetOperations\Type\FeatureDataDataType|array  $featureData
     * @param  string  $machineType
     * @param  string  $vmName
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vmInfo
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vendorDictionary
     */
    public static function create(\DateTimeInterface $updateTime, DeviceIdentifier $serverIdentifier = null, DeviceIdentifier $deviceIdentifier = null, string $alias = null, HostTypeIdentifier $hostTypeName = null, string $deviceServedStatus = null, $featureData = null, string $machineType = null, string $vmName = null, DictionaryType $vmInfo = null, DictionaryType $vendorDictionary = null)
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
     * @param  \DateTimeInterface  $updateTime
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
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $serverIdentifier
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
     * @param  \Flexsim\FlexnetOperations\Type\DeviceIdentifier  $deviceIdentifier
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
     * @param  string  $alias
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
     * @param  \Flexsim\FlexnetOperations\Type\HostTypeIdentifier  $hostTypeName
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
     * @param  string  $deviceServedStatus
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
     * @param  \Flexsim\FlexnetOperations\Type\FeatureDataDataType  $featureData
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
     * @param  string  $machineType
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
     * @param  string  $vmName
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
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vmInfo
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
     * @param  \Flexsim\FlexnetOperations\Type\DictionaryType  $vendorDictionary
     * @return $this
     */
    public function setVendorDictionary($vendorDictionary)
    {
        $this->vendorDictionary = $vendorDictionary;

        return $this;
    }
}
