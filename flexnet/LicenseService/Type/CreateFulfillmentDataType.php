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
     */
    public function __construct(string $activationId, ?int $fulfillCount = null, ?int $overDraftCount = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $owner = null, ?string $FNPTimeZoneValue = null)
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

    public static function create(string $activationId, ?int $fulfillCount = null, ?int $overDraftCount = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $owner = null, ?string $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getFulfillCount(): ?int
    {
        return $this->fulfillCount;
    }

    public function withFulfillCount(?int $fulfillCount): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionStartDate(): ?\DateTimeInterface
    {
        return $this->versionStartDate;
    }

    public function withVersionStartDate(?\DateTimeInterface $versionStartDate): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getServerIds(): ?\Flexnet\LicenseService\Type\ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?\Flexnet\LicenseService\Type\NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?\Flexnet\LicenseService\Type\CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?\Flexnet\LicenseService\Type\CustomHostIDType $customHost): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function withOwner(?string $owner): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
