<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFulfillmentLCDataType
{
    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * @var string|null
     */
    private $childActivationId;

    /**
     * @var int|null
     */
    private $fulfillCount;

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
    private $serverHost;

    /**
     * @var string|null
     */
    private $nodeLockHost;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $countedNodeLockHostIds;

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
    private $FNPTimeZoneValue;

    /**
     * Constructor
     */
    public function __construct(string $fulfillmentId, ?string $childActivationId = null, ?int $fulfillCount = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverHost = null, ?string $nodeLockHost = null, ?\Flexnet\LicenseService\Type\NodeIDsType $countedNodeLockHostIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $FNPTimeZoneValue = null)
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

    public static function create(string $fulfillmentId, ?string $childActivationId = null, ?int $fulfillCount = null, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\ServerIDsType $serverHost = null, ?string $nodeLockHost = null, ?\Flexnet\LicenseService\Type\NodeIDsType $countedNodeLockHostIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getChildActivationId(): ?string
    {
        return $this->childActivationId;
    }

    public function withChildActivationId(?string $childActivationId): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->childActivationId = $childActivationId;

        return $new;
    }

    public function getFulfillCount(): ?int
    {
        return $this->fulfillCount;
    }

    public function withFulfillCount(?int $fulfillCount): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->fulfillCount = $fulfillCount;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionStartDate(): ?\DateTimeInterface
    {
        return $this->versionStartDate;
    }

    public function withVersionStartDate(?\DateTimeInterface $versionStartDate): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getServerHost(): ?\Flexnet\LicenseService\Type\ServerIDsType
    {
        return $this->serverHost;
    }

    public function withServerHost(?\Flexnet\LicenseService\Type\ServerIDsType $serverHost): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->serverHost = $serverHost;

        return $new;
    }

    public function getNodeLockHost(): ?string
    {
        return $this->nodeLockHost;
    }

    public function withNodeLockHost(?string $nodeLockHost): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->nodeLockHost = $nodeLockHost;

        return $new;
    }

    public function getCountedNodeLockHostIds(): ?\Flexnet\LicenseService\Type\NodeIDsType
    {
        return $this->countedNodeLockHostIds;
    }

    public function withCountedNodeLockHostIds(?\Flexnet\LicenseService\Type\NodeIDsType $countedNodeLockHostIds): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->countedNodeLockHostIds = $countedNodeLockHostIds;

        return $new;
    }

    public function getCustomHost(): ?\Flexnet\LicenseService\Type\CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?\Flexnet\LicenseService\Type\CustomHostIDType $customHost): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
