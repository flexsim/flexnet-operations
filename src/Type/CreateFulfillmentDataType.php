<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateFulfillmentDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var int
     */
    protected $fulfillCount;

    /**
     * @var int
     */
    protected $overDraftCount;

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
    protected $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    protected $nodeIds;

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
    protected $owner;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @param  string  $activationId
     * @param  int  $fulfillCount
     * @param  int  $overDraftCount
     * @param  \DateTimeInterface  $startDate
     * @param  \DateTimeInterface  $versionDate
     * @param  \DateTimeInterface  $versionStartDate
     * @param  string  $soldTo
     * @param  string  $shipToEmail
     * @param  string  $shipToAddress
     * @param  \Flexsim\FlexnetOperations\Type\ServerIDsType  $serverIds
     * @param  \Flexsim\FlexnetOperations\Type\NodeIDsType  $nodeIds
     * @param  \Flexsim\FlexnetOperations\Type\CustomHostIDType  $customHost
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
     * @param  bool  $overridePolicy
     * @param  string  $owner
     * @param  string  $FNPTimeZoneValue
     */
    public function __construct(string $activationId, int $fulfillCount = null, int $overDraftCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $owner = null, string $FNPTimeZoneValue = null)
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
     * @param  string  $activationId
     * @param  int  $fulfillCount
     * @param  int  $overDraftCount
     * @param  \DateTimeInterface  $startDate
     * @param  \DateTimeInterface  $versionDate
     * @param  \DateTimeInterface  $versionStartDate
     * @param  string  $soldTo
     * @param  string  $shipToEmail
     * @param  string  $shipToAddress
     * @param  \Flexsim\FlexnetOperations\Type\ServerIDsType  $serverIds
     * @param  \Flexsim\FlexnetOperations\Type\NodeIDsType  $nodeIds
     * @param  \Flexsim\FlexnetOperations\Type\CustomHostIDType  $customHost
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
     * @param  bool  $overridePolicy
     * @param  string  $owner
     * @param  string  $FNPTimeZoneValue
     */
    public static function create(string $activationId, int $fulfillCount = null, int $overDraftCount = null, \DateTimeInterface $startDate = null, \DateTimeInterface $versionDate = null, \DateTimeInterface $versionStartDate = null, string $soldTo = null, string $shipToEmail = null, string $shipToAddress = null, ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null, AttributeDescriptorDataType $licenseModelAttributes = null, bool $overridePolicy = null, string $owner = null, string $FNPTimeZoneValue = null)
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
     * @param  string  $activationId
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
     * @param  int  $fulfillCount
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
     * @param  int  $overDraftCount
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
     * @param  \DateTimeInterface  $startDate
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
     * @param  \DateTimeInterface  $versionDate
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
     * @param  \DateTimeInterface  $versionStartDate
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
     * @param  string  $soldTo
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
     * @param  string  $shipToEmail
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
     * @param  string  $shipToAddress
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
     * @param  \Flexsim\FlexnetOperations\Type\ServerIDsType  $serverIds
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
     * @param  \Flexsim\FlexnetOperations\Type\NodeIDsType  $nodeIds
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
     * @param  \Flexsim\FlexnetOperations\Type\CustomHostIDType  $customHost
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
     * @param  \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType  $licenseModelAttributes
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
     * @param  bool  $overridePolicy
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
     * @param  string  $owner
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
     * @param  string  $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $this;
    }
}
