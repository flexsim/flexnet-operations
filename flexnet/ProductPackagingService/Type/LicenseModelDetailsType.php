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
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology, \Flexnet\ProductPackagingService\Type\ModelAttributesType $attributeDetails)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->licenseTechnology = $licenseTechnology;
        $this->attributeDetails = $attributeDetails;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology, \Flexnet\ProductPackagingService\Type\ModelAttributesType $attributeDetails)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseModelIdentifier(): \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModelIdentifier): \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    public function getLicenseTechnology(): \Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType
    {
        return $this->licenseTechnology;
    }

    public function withLicenseTechnology(\Flexnet\ProductPackagingService\Type\LicenseTechnologyIdentifierType $licenseTechnology): \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }

    public function getAttributeDetails(): \Flexnet\ProductPackagingService\Type\ModelAttributesType
    {
        return $this->attributeDetails;
    }

    public function withAttributeDetails(\Flexnet\ProductPackagingService\Type\ModelAttributesType $attributeDetails): \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType
    {
        $new = clone $this;
        $new->attributeDetails = $attributeDetails;

        return $new;
    }
}
