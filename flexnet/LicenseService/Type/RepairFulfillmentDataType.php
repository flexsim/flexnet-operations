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
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param bool|null $overridePolicy
     * @param string|null $FNPTimeZoneValue
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->overridePolicy = $overridePolicy;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @param bool|null $overridePolicy
     * @param string|null $FNPTimeZoneValue
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes = null, bool|null $overridePolicy = null, string|null $FNPTimeZoneValue = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return RepairFulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
     */
    public function getLicenseModelAttributes() : \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes
     * @return RepairFulfillmentDataType
     */
    public function withLicenseModelAttributes(\Flexnet\LicenseService\Type\AttributeDescriptorDataType|null $licenseModelAttributes) : \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->licenseModelAttributes = $licenseModelAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy() : bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool|null $overridePolicy
     * @return RepairFulfillmentDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy) : \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getFNPTimeZoneValue() : string|null
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string|null $FNPTimeZoneValue
     * @return RepairFulfillmentDataType
     */
    public function withFNPTimeZoneValue(string|null $FNPTimeZoneValue) : \Flexnet\LicenseService\Type\RepairFulfillmentDataType
    {
        $new = clone $this;
        $new->FNPTimeZoneValue = $FNPTimeZoneValue;

        return $new;
    }
}

