<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseModelDetailsType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
     */
    private $licenseTechnology;

    /**
     * @var \Flexnet\ProductPackagingService\Type\ModelAttributesType
     */
    private $attributeDetails;

    /**
     * Constructor
     */
    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier, LicenseTechnologyIdentifierType $licenseTechnology, ModelAttributesType $attributeDetails)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->licenseTechnology = $licenseTechnology;
        $this->attributeDetails = $attributeDetails;
    }

    public static function create(LicenseModelIdentifierType $licenseModelIdentifier, LicenseTechnologyIdentifierType $licenseTechnology, ModelAttributesType $attributeDetails)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    public function getLicenseTechnology(): LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(LicenseTechnologyIdentifierType $licenseTechnology): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getAttributeDetails(): ModelAttributesType
    {
        return $this->attributeDetails;
    }

    public function withAttributeDetails(ModelAttributesType $attributeDetails): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->attributeDetails = $attributeDetails;

        return $new;
    }
}
