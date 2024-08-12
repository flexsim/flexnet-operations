<?php

namespace Flexnet\LicenseService\Type;

class CreateChildLineItemFulfillmentDataType
{
    /**
     * @var string
     */
    private $activationId;

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
     * @var \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    private $licenseModelAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\HostIdDetailsType
     */
    private $hostIdDetails;

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
    public function __construct(string $activationId, \Flexnet\LicenseService\Type\HostIdDetailsType $hostIdDetails, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $owner = null, ?string $FNPTimeZoneValue = null)
    {
        $this->activationId = $activationId;
        $this->hostIdDetails = $hostIdDetails;
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->owner = $owner;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    public static function create(string $activationId, \Flexnet\LicenseService\Type\HostIdDetailsType $hostIdDetails, ?\DateTimeInterface $startDate = null, ?\DateTimeInterface $versionDate = null, ?\DateTimeInterface $versionStartDate = null, ?string $soldTo = null, ?string $shipToEmail = null, ?string $shipToAddress = null, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $owner = null, ?string $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(?\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getVersionDate(): ?\DateTimeInterface
    {
        return $this->versionDate;
    }

    public function withVersionDate(?\DateTimeInterface $versionDate): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->versionDate = $versionDate;

        return $new;
    }

    public function getVersionStartDate(): ?\DateTimeInterface
    {
        return $this->versionStartDate;
    }

    public function withVersionStartDate(?\DateTimeInterface $versionStartDate): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->versionStartDate = $versionStartDate;

        return $new;
    }

    public function getSoldTo(): ?string
    {
        return $this->soldTo;
    }

    public function withSoldTo(?string $soldTo): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getHostIdDetails(): \Flexnet\LicenseService\Type\HostIdDetailsType
    {
        return $this->hostIdDetails;
    }

    public function withHostIdDetails(\Flexnet\LicenseService\Type\HostIdDetailsType $hostIdDetails): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->hostIdDetails = $hostIdDetails;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function withOwner(?string $owner): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->owner = $owner;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
