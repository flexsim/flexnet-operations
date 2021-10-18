<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsageSummaryParametersType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $activationUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $entitlementUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $entitlementId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $usedCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $usedExceedsOrderedBy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $usedExceedsProvisionedBy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType
     */
    protected $organizationUnitName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $soldToUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $orderableUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orderableName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $orderableVersion;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $serverUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $serverId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $serverAlias;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $summaryTimeUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $summaryTime;

    /**
     * @var string
     */
    protected $groupBy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $activationUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $entitlementUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsOrderedBy
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsProvisionedBy
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $soldToUniqueId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $orderableUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableVersion
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverAlias
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $summaryTimeUniqueId
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $summaryTime
     * @var string $groupBy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ExternalIdQueryType $activationUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $entitlementUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsOrderedBy = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsProvisionedBy = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $soldToUniqueId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $orderableUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableVersion = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverAlias = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $summaryTimeUniqueId = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $summaryTime = null, string $groupBy = null)
    {
        $this->activationUniqueId = $activationUniqueId;
        $this->activationId = $activationId;
        $this->entitlementUniqueId = $entitlementUniqueId;
        $this->entitlementId = $entitlementId;
        $this->usedCount = $usedCount;
        $this->usedExceedsOrderedBy = $usedExceedsOrderedBy;
        $this->usedExceedsProvisionedBy = $usedExceedsProvisionedBy;
        $this->organizationUnitName = $organizationUnitName;
        $this->soldToUniqueId = $soldToUniqueId;
        $this->orderableUniqueId = $orderableUniqueId;
        $this->orderableName = $orderableName;
        $this->orderableVersion = $orderableVersion;
        $this->serverUniqueId = $serverUniqueId;
        $this->serverId = $serverId;
        $this->serverAlias = $serverAlias;
        $this->summaryTimeUniqueId = $summaryTimeUniqueId;
        $this->summaryTime = $summaryTime;
        $this->groupBy = $groupBy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $activationUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $entitlementUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedCount
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsOrderedBy
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsProvisionedBy
     * @var \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $soldToUniqueId
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $orderableUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableVersion
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverAlias
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $summaryTimeUniqueId
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $summaryTime
     * @var string $groupBy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ExternalIdQueryType $activationUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $entitlementUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedCount = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsOrderedBy = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsProvisionedBy = null, \Flexsim\FlexnetOperations\Type\PartnerTierQueryType $organizationUnitName = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $soldToUniqueId = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $orderableUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableVersion = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverAlias = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $summaryTimeUniqueId = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $summaryTime = null, string $groupBy = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getActivationUniqueId()
    {
        return $this->activationUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $activationUniqueId
     * @return $this
     */
    public function setActivationUniqueId($activationUniqueId)
    {
        $this->activationUniqueId = $activationUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getEntitlementUniqueId()
    {
        return $this->entitlementUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $entitlementUniqueId
     * @return $this
     */
    public function setEntitlementUniqueId($entitlementUniqueId)
    {
        $this->entitlementUniqueId = $entitlementUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEntitlementId()
    {
        return $this->entitlementId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $entitlementId
     * @return $this
     */
    public function setEntitlementId($entitlementId)
    {
        $this->entitlementId = $entitlementId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getUsedCount()
    {
        return $this->usedCount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $usedCount
     * @return $this
     */
    public function setUsedCount($usedCount)
    {
        $this->usedCount = $usedCount;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getUsedExceedsOrderedBy()
    {
        return $this->usedExceedsOrderedBy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsOrderedBy
     * @return $this
     */
    public function setUsedExceedsOrderedBy($usedExceedsOrderedBy)
    {
        $this->usedExceedsOrderedBy = $usedExceedsOrderedBy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getUsedExceedsProvisionedBy()
    {
        return $this->usedExceedsProvisionedBy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $usedExceedsProvisionedBy
     * @return $this
     */
    public function setUsedExceedsProvisionedBy($usedExceedsProvisionedBy)
    {
        $this->usedExceedsProvisionedBy = $usedExceedsProvisionedBy;
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
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getSoldToUniqueId()
    {
        return $this->soldToUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $soldToUniqueId
     * @return $this
     */
    public function setSoldToUniqueId($soldToUniqueId)
    {
        $this->soldToUniqueId = $soldToUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getOrderableUniqueId()
    {
        return $this->orderableUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $orderableUniqueId
     * @return $this
     */
    public function setOrderableUniqueId($orderableUniqueId)
    {
        $this->orderableUniqueId = $orderableUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrderableName()
    {
        return $this->orderableName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableName
     * @return $this
     */
    public function setOrderableName($orderableName)
    {
        $this->orderableName = $orderableName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrderableVersion()
    {
        return $this->orderableVersion;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orderableVersion
     * @return $this
     */
    public function setOrderableVersion($orderableVersion)
    {
        $this->orderableVersion = $orderableVersion;
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
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getServerAlias()
    {
        return $this->serverAlias;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverAlias
     * @return $this
     */
    public function setServerAlias($serverAlias)
    {
        $this->serverAlias = $serverAlias;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getSummaryTimeUniqueId()
    {
        return $this->summaryTimeUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $summaryTimeUniqueId
     * @return $this
     */
    public function setSummaryTimeUniqueId($summaryTimeUniqueId)
    {
        $this->summaryTimeUniqueId = $summaryTimeUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getSummaryTime()
    {
        return $this->summaryTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $summaryTime
     * @return $this
     */
    public function setSummaryTime($summaryTime)
    {
        $this->summaryTime = $summaryTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @param string $groupBy
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
        return $this;
    }
}
