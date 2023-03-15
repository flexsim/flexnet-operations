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
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\ModelAttributesType  $attributeDetails
     */
    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier, LicenseTechnologyIdentifierType $licenseTechnology, ModelAttributesType $attributeDetails)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->licenseTechnology = $licenseTechnology;
        $this->attributeDetails = $attributeDetails;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType  $licenseTechnology
     * @param  \Flexnet\ProductPackagingService\Type\ModelAttributesType  $attributeDetails
     */
    public static function create(LicenseModelIdentifierType $licenseModelIdentifier, LicenseTechnologyIdentifierType $licenseTechnology, ModelAttributesType $attributeDetails)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     */
    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology(): LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType  $licenseTechnology
     */
    public function withLicenseTechnology(LicenseTechnologyIdentifierType $licenseTechnology): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ModelAttributesType
     */
    public function getAttributeDetails(): ModelAttributesType
    {
        return $this->attributeDetails;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ModelAttributesType  $attributeDetails
     */
    public function withAttributeDetails(ModelAttributesType $attributeDetails): LicenseModelDetailsType
    {
        $new = clone $this;
        $new->attributeDetails = $attributeDetails;

        return $new;
    }
}
