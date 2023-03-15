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
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $FNPTimeZoneValue
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null  $licenseModelAttributes
     * @param  bool|null  $overridePolicy
     * @param  string|null  $FNPTimeZoneValue
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

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
    public function withLicenseModelAttributes(AttributeDescriptorDataType|null $licenseModelAttributes): RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    public function getOverridePolicy(): bool|null
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(bool|null $overridePolicy): RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    public function getFNPTimeZoneValue(): string|null
    {
        return $this->FNPTimeZoneValue;
    }

    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue): RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}
