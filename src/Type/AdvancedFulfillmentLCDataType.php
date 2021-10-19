<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFulfillmentLCDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $fulfillmentId;

    /**
     * @var string
     */
    protected $childActivationId;

    /**
     * @var int
     */
    protected $fulfillCount;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $versionDate;

    /**
     * @var \DateTimeInterface
     */
    protected $versionStartDate;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    protected $serverHost;

    /**
     * @var string
     */
    protected $nodeLockHost;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    protected $countedNodeLockHostIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    protected $customHost;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var bool
     */
    protected $overridePolicy;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @param string $fulfillmentId
     * @param string $childActivationId
     * @param int $fulfillCount
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $versionDate
     * @param \DateTimeInterface $versionStartDate
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @param string $nodeLockHost
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public function __construct(string $fulfillmentId, string $childActivationId = null, int $fulfillCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost = null, string $nodeLockHost = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->childActivationId = $childActivationId;
        $this->fulfillCount = $fulfillCount;
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverHost = $serverHost;
        $this->nodeLockHost = $nodeLockHost;
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        $this->customHost = $customHost;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * create a new instance of this class
     *
     * @param string $fulfillmentId
     * @param string $childActivationId
     * @param int $fulfillCount
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $versionDate
     * @param \DateTimeInterface $versionStartDate
     * @param string $soldTo
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @param string $nodeLockHost
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param bool $overridePolicy
     * @param string $FNPTimeZoneValue
     */
    public static function create(string $fulfillmentId, string $childActivationId = null, int $fulfillCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost = null, string $nodeLockHost = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $FNPTimeZoneValue = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildActivationId()
    {
        return $this->childActivationId;
    }

    /**
     * @param string $childActivationId
     * @return $this
     */
    public function setChildActivationId($childActivationId)
    {
        $this->childActivationId = $childActivationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfillCount()
    {
        return $this->fulfillCount;
    }

    /**
     * @param int $fulfillCount
     * @return $this
     */
    public function setFulfillCount($fulfillCount)
    {
        $this->fulfillCount = $fulfillCount;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionDate()
    {
        return $this->versionDate;
    }

    /**
     * @param \DateTimeInterface $versionDate
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->versionDate = $versionDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVersionStartDate()
    {
        return $this->versionStartDate;
    }

    /**
     * @param \DateTimeInterface $versionStartDate
     * @return $this
     */
    public function setVersionStartDate($versionStartDate)
    {
        $this->versionStartDate = $versionStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerHost()
    {
        return $this->serverHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @return $this
     */
    public function setServerHost($serverHost)
    {
        $this->serverHost = $serverHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeLockHost()
    {
        return $this->nodeLockHost;
    }

    /**
     * @param string $nodeLockHost
     * @return $this
     */
    public function setNodeLockHost($nodeLockHost)
    {
        $this->nodeLockHost = $nodeLockHost;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getCountedNodeLockHostIds()
    {
        return $this->countedNodeLockHostIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @return $this
     */
    public function setCountedNodeLockHostIds($countedNodeLockHostIds)
    {
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    public function getCustomHost()
    {
        return $this->customHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @return $this
     */
    public function setCustomHost($customHost)
    {
        $this->customHost = $customHost;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverridePolicy()
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool $overridePolicy
     * @return $this
     */
    public function setOverridePolicy($overridePolicy)
    {
        $this->overridePolicy = $overridePolicy;
        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        return $this;
    }
}
