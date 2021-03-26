<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateFulfillmentDataType
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var int
     */
    private $fulfillCount;

    /**
     * @var int
     */
    private $overDraftCount;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $versionDate;

    /**
     * @var \DateTimeInterface
     */
    private $versionStartDate;

    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var string
     */
    private $shipToEmail;

    /**
     * @var string
     */
    private $shipToAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    private $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    private $nodeIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    private $customHost;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $licenseModelAttributes;

    /**
     * @var bool
     */
    private $overridePolicy;

    /**
     * @var string
     */
    private $owner;

    /**
     * @var string
     */
    private $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var int $fulfillCount
     * @var int $overDraftCount
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $versionDate
     * @var \DateTimeInterface $versionStartDate
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var bool $overridePolicy
     * @var string $owner
     * @var string $FNPTimeZoneValue
     */
    public function __construct(string $activationId, int $fulfillCount = null, int $overDraftCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $owner = null, string $FNPTimeZoneValue = null)
    {
        $this->activationId = $activationId;
        $this->fulfillCount = $fulfillCount;
        $this->overDraftCount = $overDraftCount;
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->owner = $owner;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var int $fulfillCount
     * @var int $overDraftCount
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $versionDate
     * @var \DateTimeInterface $versionStartDate
     * @var string $soldTo
     * @var string $shipToEmail
     * @var string $shipToAddress
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @var bool $overridePolicy
     * @var string $owner
     * @var string $FNPTimeZoneValue
     */
    public static function create(string $activationId, int $fulfillCount = null, int $overDraftCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $owner = null, string $FNPTimeZoneValue = null)
    {
        return new self(...func_get_args());
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
     * @return int
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param int $overDraftCount
     * @return $this
     */
    public function setOverDraftCount($overDraftCount)
    {
        $this->overDraftCount = $overDraftCount;
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
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getNodeIds()
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @return $this
     */
    public function setNodeIds($nodeIds)
    {
        $this->nodeIds = $nodeIds;
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
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
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

