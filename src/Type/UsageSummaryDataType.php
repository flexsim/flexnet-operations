<?php

namespace Flexsim\FlexnetOperations\Type;

class UsageSummaryDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $summaryTimeUniqueId;

    /**
     * @var \DateTimeInterface
     */
    protected $summaryTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    protected $server;

    /**
     * @var string
     */
    protected $serverAlias;

    /**
     * @var \DateTimeInterface
     */
    protected $serverLastSyncTime;

    /**
     * @var string
     */
    protected $entitlementUniqueId;

    /**
     * @var string
     */
    protected $entitlementId;

    /**
     * @var string
     */
    protected $activationUniqueId;

    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var string
     */
    protected $featureUniqueId;

    /**
     * @var string
     */
    protected $featureName;

    /**
     * @var string
     */
    protected $featureVersion;

    /**
     * @var int
     */
    protected $orderedCount;

    /**
     * @var int
     */
    protected $usedCount;

    /**
     * @var int
     */
    protected $provisionedCount;

    /**
     * Constructor
     *
     * @param int $usedCount
     * @param int $provisionedCount
     * @param string $summaryTimeUniqueId
     * @param \DateTimeInterface $summaryTime
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $server
     * @param string $serverAlias
     * @param \DateTimeInterface $serverLastSyncTime
     * @param string $entitlementUniqueId
     * @param string $entitlementId
     * @param string $activationUniqueId
     * @param string $activationId
     * @param string $featureUniqueId
     * @param string $featureName
     * @param string $featureVersion
     * @param int $orderedCount
     */
    public function __construct(
        int $usedCount,
        int $provisionedCount,
        string $summaryTimeUniqueId = null,
        \DateTimeInterface $summaryTime = null,
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $server = null,
        string $serverAlias = null,
        \DateTimeInterface $serverLastSyncTime = null,
        string $entitlementUniqueId = null,
        string $entitlementId = null,
        string $activationUniqueId = null,
        string $activationId = null,
        string $featureUniqueId = null,
        string $featureName = null,
        string $featureVersion = null,
        int $orderedCount = null
    ) {
        $this->usedCount = $usedCount;
        $this->provisionedCount = $provisionedCount;
        $this->summaryTimeUniqueId = $summaryTimeUniqueId;
        $this->summaryTime = $summaryTime;
        $this->server = $server;
        $this->serverAlias = $serverAlias;
        $this->serverLastSyncTime = $serverLastSyncTime;
        $this->entitlementUniqueId = $entitlementUniqueId;
        $this->entitlementId = $entitlementId;
        $this->activationUniqueId = $activationUniqueId;
        $this->activationId = $activationId;
        $this->featureUniqueId = $featureUniqueId;
        $this->featureName = $featureName;
        $this->featureVersion = $featureVersion;
        $this->orderedCount = $orderedCount;
    }

    /**
     * create a new instance of this class
     *
     * @param int $usedCount
     * @param int $provisionedCount
     * @param string $summaryTimeUniqueId
     * @param \DateTimeInterface $summaryTime
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $server
     * @param string $serverAlias
     * @param \DateTimeInterface $serverLastSyncTime
     * @param string $entitlementUniqueId
     * @param string $entitlementId
     * @param string $activationUniqueId
     * @param string $activationId
     * @param string $featureUniqueId
     * @param string $featureName
     * @param string $featureVersion
     * @param int $orderedCount
     */
    public static function create(
        int $usedCount,
        int $provisionedCount,
        string $summaryTimeUniqueId = null,
        \DateTimeInterface $summaryTime = null,
        \Flexsim\FlexnetOperations\Type\DeviceIdentifier $server = null,
        string $serverAlias = null,
        \DateTimeInterface $serverLastSyncTime = null,
        string $entitlementUniqueId = null,
        string $entitlementId = null,
        string $activationUniqueId = null,
        string $activationId = null,
        string $featureUniqueId = null,
        string $featureName = null,
        string $featureVersion = null,
        int $orderedCount = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getSummaryTimeUniqueId()
    {
        return $this->summaryTimeUniqueId;
    }

    /**
     * @param string $summaryTimeUniqueId
     * @return $this
     */
    public function setSummaryTimeUniqueId($summaryTimeUniqueId)
    {
        $this->summaryTimeUniqueId = $summaryTimeUniqueId;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSummaryTime()
    {
        return $this->summaryTime;
    }

    /**
     * @param \DateTimeInterface $summaryTime
     * @return $this
     */
    public function setSummaryTime($summaryTime)
    {
        $this->summaryTime = $summaryTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerAlias()
    {
        return $this->serverAlias;
    }

    /**
     * @param string $serverAlias
     * @return $this
     */
    public function setServerAlias($serverAlias)
    {
        $this->serverAlias = $serverAlias;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getServerLastSyncTime()
    {
        return $this->serverLastSyncTime;
    }

    /**
     * @param \DateTimeInterface $serverLastSyncTime
     * @return $this
     */
    public function setServerLastSyncTime($serverLastSyncTime)
    {
        $this->serverLastSyncTime = $serverLastSyncTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementUniqueId()
    {
        return $this->entitlementUniqueId;
    }

    /**
     * @param string $entitlementUniqueId
     * @return $this
     */
    public function setEntitlementUniqueId($entitlementUniqueId)
    {
        $this->entitlementUniqueId = $entitlementUniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param string $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivationUniqueId()
    {
        return $this->activationUniqueId;
    }

    /**
     * @param string $activationUniqueId
     * @return $this
     */
    public function setActivationUniqueId($activationUniqueId)
    {
        $this->activationUniqueId = $activationUniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureUniqueId()
    {
        return $this->featureUniqueId;
    }

    /**
     * @param string $featureUniqueId
     * @return $this
     */
    public function setFeatureUniqueId($featureUniqueId)
    {
        $this->featureUniqueId = $featureUniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param string $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureVersion()
    {
        return $this->featureVersion;
    }

    /**
     * @param string $featureVersion
     * @return $this
     */
    public function setFeatureVersion($featureVersion)
    {
        $this->featureVersion = $featureVersion;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderedCount()
    {
        return $this->orderedCount;
    }

    /**
     * @param int $orderedCount
     * @return $this
     */
    public function setOrderedCount($orderedCount)
    {
        $this->orderedCount = $orderedCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedCount()
    {
        return $this->usedCount;
    }

    /**
     * @param int $usedCount
     * @return $this
     */
    public function setUsedCount($usedCount)
    {
        $this->usedCount = $usedCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getProvisionedCount()
    {
        return $this->provisionedCount;
    }

    /**
     * @param int $provisionedCount
     * @return $this
     */
    public function setProvisionedCount($provisionedCount)
    {
        $this->provisionedCount = $provisionedCount;
        return $this;
    }
}
