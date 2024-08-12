<?php

namespace Flexnet\LicenseService\Type;

class RepairFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

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
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $FNPTimeZoneValue = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes = null, ?bool $overridePolicy = null, ?string $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getLicenseModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeDescriptorDataType
    {
        return $this->licenseModelAttributes;
    }

    public function withLicenseModelAttributes(?\Flexnet\LicenseService\Type\AttributeDescriptorDataType $licenseModelAttributes): \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getFNPTimeZoneValue(): ?string
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(?string $FNPTimeZoneValue): \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
