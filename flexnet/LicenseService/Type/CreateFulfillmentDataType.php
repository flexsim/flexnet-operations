<?php

namespace Flexnet\LicenseService\Type;

class CreateFulfillmentDataType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var int|null
     */
    private $fulfillCount;

    /**
     * @var int|null
     */
    private $overDraftCount;

    /**
     * @var \DateTimeInterface|null
     */
    private $startDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $versionStartDate;

    /**
     * @var string|null
     */
    private $soldTo;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverIds;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $nodeIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    private $customHost;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * @var string|null
     */
    private $owner;

    /**
     * @var string|null
     */
    private $FNPTimeZoneValue;

    /**
     * Constructor
     *
     * @param  string  $activationId
     * @param  int|null  $fulfillCount
     * @param  int|null  $overDraftCount
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \DateTimeInterface|null  $versionStartDate
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $owner
     * @param  string|null  $FNPTimeZoneValue
     */
    public function __construct(string $activationId, int|null $fulfillCount = null, int|null $overDraftCount = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $owner = null, string|null $FNPTimeZoneValue = null)
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
     * @param  string  $activationId
     * @param  int|null  $fulfillCount
     * @param  int|null  $overDraftCount
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \DateTimeInterface|null  $versionStartDate
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $owner
     * @param  string|null  $FNPTimeZoneValue
     */
    public static function create(string $activationId, int|null $fulfillCount = null, int|null $overDraftCount = null, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, ServerIDsType|null $serverIds = null, NodeIDsType|null $nodeIds = null, CustomHostIDType|null $customHost = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $owner = null, string|null $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId(): string
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return CreateFulfillmentDataType
     */
    public function withActivationId(string $activationId): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getFulfillCount(): int|null
    {
        return $this->fulfillCount;
    }

    /**
     * @param  int|null  $fulfillCount
     * @return CreateFulfillmentDataType
     */
    public function withFulfillCount(int|null $fulfillCount): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getOverDraftCount(): int|null
    {
        return $this->overDraftCount;
    }

    /**
     * @param  int|null  $overDraftCount
     * @return CreateFulfillmentDataType
     */
    public function withOverDraftCount(int|null $overDraftCount): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    /**
     * @param  \DateTimeInterface|null  $startDate
     * @return CreateFulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    /**
     * @param  \DateTimeInterface|null  $versionDate
     * @return CreateFulfillmentDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getVersionStartDate(): \DateTimeInterface|null
    {
        return $this->versionStartDate;
    }

    /**
     * @param  \DateTimeInterface|null  $versionStartDate
     * @return CreateFulfillmentDataType
     */
    public function withVersionStartDate(\DateTimeInterface|null $versionStartDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    /**
     * @param  string|null  $soldTo
     * @return CreateFulfillmentDataType
     */
    public function withSoldTo(string|null $soldTo): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string|null  $shipToEmail
     * @return CreateFulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string|null  $shipToAddress
     * @return CreateFulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds(): ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @return CreateFulfillmentDataType
     */
    public function withServerIds(ServerIDsType|null $serverIds): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds(): NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $nodeIds
     * @return CreateFulfillmentDataType
     */
    public function withNodeIds(NodeIDsType|null $nodeIds): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost(): CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @return CreateFulfillmentDataType
     */
    public function withCustomHost(CustomHostIDType|null $customHost): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes(): AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @return CreateFulfillmentDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param  bool|null  $overridePolicy
     * @return CreateFulfillmentDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getOwner(): string|null
    {
        return $this->owner;
    }

    /**
     * @param  string|null  $owner
     * @return CreateFulfillmentDataType
     */
    public function withOwner(string|null $owner): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param  string|null  $FNPTimeZoneValue
     * @return CreateFulfillmentDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
