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
     *
     * @param  string  $activationId
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \DateTimeInterface|null  $versionStartDate
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  \Flexnet\LicenseService\Type\HostIdDetailsType  $hostIdDetails
     * @param  bool|null  $overridePolicy
     * @param  string|null  $owner
     * @param  string|null  $FNPTimeZoneValue
     */
    public function __construct(string $activationId, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, HostIdDetailsType $hostIdDetails, bool|null $overridePolicy = null, string|null $owner = null, string|null $FNPTimeZoneValue = null)
    {
        $this->activationId = $activationId;
        $this->startDate = $startDate;
        $this->versionDate = $versionDate;
        $this->versionStartDate = $versionStartDate;
        $this->soldTo = $soldTo;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->hostIdDetails = $hostIdDetails;
        $this->overridePolicy = $overridePolicy;
        $this->owner = $owner;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * @param  string  $activationId
     * @param  \DateTimeInterface|null  $startDate
     * @param  \DateTimeInterface|null  $versionDate
     * @param  \DateTimeInterface|null  $versionStartDate
     * @param  string|null  $soldTo
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  \Flexnet\LicenseService\Type\HostIdDetailsType  $hostIdDetails
     * @param  bool|null  $overridePolicy
     * @param  string|null  $owner
     * @param  string|null  $FNPTimeZoneValue
     */
    public static function create(string $activationId, \DateTimeInterface|null $startDate = null, \DateTimeInterface|null $versionDate = null, \DateTimeInterface|null $versionStartDate = null, string|null $soldTo = null, string|null $shipToEmail = null, string|null $shipToAddress = null, AttributeDescriptorDataType|null $licenseModelAttributes = null, HostIdDetailsType $hostIdDetails, bool|null $overridePolicy = null, string|null $owner = null, string|null $FNPTimeZoneValue = null)
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withActivationId(string $activationId): CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface|null $startDate): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withVersionDate(\DateTimeInterface|null $versionDate): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withVersionStartDate(\DateTimeInterface|null $versionStartDate): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withSoldTo(string|null $soldTo): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress): CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostIdDetailsType
     */
    public function getHostIdDetails(): HostIdDetailsType
    {
        return $this->hostIdDetails;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDetailsType  $hostIdDetails
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withHostIdDetails(HostIdDetailsType $hostIdDetails): CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->hostIdDetails = $hostIdDetails;

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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withOwner(string|null $owner): CreateChildLineItemFulfillmentDataType
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
     * @return CreateChildLineItemFulfillmentDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): CreateChildLineItemFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
