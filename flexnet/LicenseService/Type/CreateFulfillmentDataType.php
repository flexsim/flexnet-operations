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

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getFulfillCount(): int|null
    {
        return $this->fulfillCount;
    }

    public function withFulfillCount(int|null $fulfillCount): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    public function getOverDraftCount(): int|null
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(int|null $overDraftCount): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface|null
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface|null $startDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getVersionDate(): \DateTimeInterface|null
    {
        return $this->versionDate;
    }

    public function withVersionDate(\DateTimeInterface|null $versionDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionStartDate(): \DateTimeInterface|null
    {
        return $this->versionStartDate;
    }

    public function withVersionStartDate(\DateTimeInterface|null $versionStartDate): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    public function getSoldTo(): string|null
    {
        return $this->soldTo;
    }

    public function withSoldTo(string|null $soldTo): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

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
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(bool|null $overridePolicy): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getOwner(): string|null
    {
        return $this->owner;
    }

    public function withOwner(string|null $owner): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
