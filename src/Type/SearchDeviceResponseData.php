<?php

namespace Flexsim\FlexnetOperations\Type;

class SearchDeviceResponseData extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceId
     */
    protected $deviceId;

    /**
     * @var string
     */
    protected $backupDeviceId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $hostTypeName;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $servedStatus;

    /**
     * @var bool
     */
    protected $hosted;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SoldToType
     */
    protected $soldTo;

    /**
     * @var bool
     */
    protected $hasBufferLicense;

    /**
     * @var string
     */
    protected $bufferLicense;

    /**
     * @var bool
     */
    protected $hasAddonLicense;

    /**
     * @var string
     */
    protected $addonLicense;

    /**
     * @var string
     */
    protected $publisherIdName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceId
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
     * @var string
     */
    protected $userString;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $userIdentifier;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModified;

    /**
     * @var \DateTimeInterface
     */
    protected $lastSyncTime;

    /**
     * @var \DateTimeInterface
     */
    protected $lastRequestTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddonData
     */
    protected $addon;

    /**
     * @var bool
     */
    protected $hasUpdates;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @param string $backupDeviceId
     * @param string $name
     * @param string $description
     * @param string $hostTypeName
     * @param string $status
     * @param string $servedStatus
     * @param bool $hosted
     * @param \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @param bool $hasBufferLicense
     * @param string $bufferLicense
     * @param bool $hasAddonLicense
     * @param string $addonLicense
     * @param string $publisherIdName
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $parentIdentifier
     * @param string $machineType
     * @param string $vmName
     * @param string $userString
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @param \DateTimeInterface $lastModified
     * @param \DateTimeInterface $lastSyncTime
     * @param \DateTimeInterface $lastRequestTime
     * @param \Flexsim\FlexnetOperations\Type\AddonData|array $addon
     * @param bool $hasUpdates
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceId $deviceId = null, string $backupDeviceId = null, string $name = null, string $description = null, string $hostTypeName = null, string $status = null, string $servedStatus = null, bool $hosted = null, \Flexsim\FlexnetOperations\Type\SoldToType $soldTo = null, bool $hasBufferLicense = null, string $bufferLicense = null, bool $hasAddonLicense = null, string $addonLicense = null, string $publisherIdName = null, \Flexsim\FlexnetOperations\Type\DeviceId $parentIdentifier = null, string $machineType = null, string $vmName = null, string $userString = null, \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier = null, \DateTimeInterface $lastModified = null, \DateTimeInterface $lastSyncTime = null, \DateTimeInterface $lastRequestTime = null, $addon = null, bool $hasUpdates = null)
    {
        $this->deviceId = $deviceId;
        $this->backupDeviceId = $backupDeviceId;
        $this->name = $name;
        $this->description = $description;
        $this->hostTypeName = $hostTypeName;
        $this->status = $status;
        $this->servedStatus = $servedStatus;
        $this->hosted = $hosted;
        $this->soldTo = $soldTo;
        $this->hasBufferLicense = $hasBufferLicense;
        $this->bufferLicense = $bufferLicense;
        $this->hasAddonLicense = $hasAddonLicense;
        $this->addonLicense = $addonLicense;
        $this->publisherIdName = $publisherIdName;
        $this->parentIdentifier = $parentIdentifier;
        $this->machineType = $machineType;
        $this->vmName = $vmName;
        $this->userString = $userString;
        $this->userIdentifier = $userIdentifier;
        $this->lastModified = $lastModified;
        $this->lastSyncTime = $lastSyncTime;
        $this->lastRequestTime = $lastRequestTime;
        $this->addon = $addon;
        $this->hasUpdates = $hasUpdates;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @param string $backupDeviceId
     * @param string $name
     * @param string $description
     * @param string $hostTypeName
     * @param string $status
     * @param string $servedStatus
     * @param bool $hosted
     * @param \Flexsim\FlexnetOperations\Type\SoldToType $soldTo
     * @param bool $hasBufferLicense
     * @param string $bufferLicense
     * @param bool $hasAddonLicense
     * @param string $addonLicense
     * @param string $publisherIdName
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $parentIdentifier
     * @param string $machineType
     * @param string $vmName
     * @param string $userString
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @param \DateTimeInterface $lastModified
     * @param \DateTimeInterface $lastSyncTime
     * @param \DateTimeInterface $lastRequestTime
     * @param \Flexsim\FlexnetOperations\Type\AddonData|array $addon
     * @param bool $hasUpdates
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceId $deviceId = null, string $backupDeviceId = null, string $name = null, string $description = null, string $hostTypeName = null, string $status = null, string $servedStatus = null, bool $hosted = null, \Flexsim\FlexnetOperations\Type\SoldToType $soldTo = null, bool $hasBufferLicense = null, string $bufferLicense = null, bool $hasAddonLicense = null, string $addonLicense = null, string $publisherIdName = null, \Flexsim\FlexnetOperations\Type\DeviceId $parentIdentifier = null, string $machineType = null, string $vmName = null, string $userString = null, \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier = null, \DateTimeInterface $lastModified = null, \DateTimeInterface $lastSyncTime = null, \DateTimeInterface $lastRequestTime = null, $addon = null, bool $hasUpdates = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceId
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackupDeviceId()
    {
        return $this->backupDeviceId;
    }

    /**
     * @param string $backupDeviceId
     * @return $this
     */
    public function setBackupDeviceId($backupDeviceId)
    {
        $this->backupDeviceId = $backupDeviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return string
     */
    public function getHostTypeName()
    {
        return $this->hostTypeName;
    }

    /**
     * @param string $hostTypeName
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getServedStatus()
    {
        return $this->servedStatus;
    }

    /**
     * @param string $servedStatus
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
     * @return bool
     */
    public function getHasBufferLicense()
    {
        return $this->hasBufferLicense;
    }

    /**
     * @param bool $hasBufferLicense
     * @return $this
     */
    public function setHasBufferLicense($hasBufferLicense)
    {
        $this->hasBufferLicense = $hasBufferLicense;
        return $this;
    }

    /**
     * @return string
     */
    public function getBufferLicense()
    {
        return $this->bufferLicense;
    }

    /**
     * @param string $bufferLicense
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
     * @return string
     */
    public function getPublisherIdName()
    {
        return $this->publisherIdName;
    }

    /**
     * @param string $publisherIdName
     * @return $this
     */
    public function setPublisherIdName($publisherIdName)
    {
        $this->publisherIdName = $publisherIdName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceId
     */
    public function getParentIdentifier()
    {
        return $this->parentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceId $parentIdentifier
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
     * @return string
     */
    public function getUserString()
    {
        return $this->userString;
    }

    /**
     * @param string $userString
     * @return $this
     */
    public function setUserString($userString)
    {
        $this->userString = $userString;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @return $this
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param \DateTimeInterface $lastModified
     * @return $this
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastSyncTime()
    {
        return $this->lastSyncTime;
    }

    /**
     * @param \DateTimeInterface $lastSyncTime
     * @return $this
     */
    public function setLastSyncTime($lastSyncTime)
    {
        $this->lastSyncTime = $lastSyncTime;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastRequestTime()
    {
        return $this->lastRequestTime;
    }

    /**
     * @param \DateTimeInterface $lastRequestTime
     * @return $this
     */
    public function setLastRequestTime($lastRequestTime)
    {
        $this->lastRequestTime = $lastRequestTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddonData
     */
    public function getAddon()
    {
        return $this->addon;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddonData $addon
     * @return $this
     */
    public function setAddon($addon)
    {
        $this->addon = $addon;
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
