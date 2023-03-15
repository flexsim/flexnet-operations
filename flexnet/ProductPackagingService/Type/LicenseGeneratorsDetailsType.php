<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseGeneratorsDetailsType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType>|null
     */
    private $licenseGeneratorIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType>|null  $licenseGeneratorIdentifier
     */
    public function __construct(LicenseGeneratorIdentifierType|array|null $licenseGeneratorIdentifier = null)
    {
        $this->licenseGeneratorIdentifier = $licenseGeneratorIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType>|null  $licenseGeneratorIdentifier
     */
    public static function create(LicenseGeneratorIdentifierType|array|null $licenseGeneratorIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType>|null
     */
    public function getLicenseGeneratorIdentifier(): LicenseGeneratorIdentifierType|array|null
    {
        return $this->licenseGeneratorIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseGeneratorIdentifierType>|null  $licenseGeneratorIdentifier
     */
    public function withLicenseGeneratorIdentifier(LicenseGeneratorIdentifierType|array|null $licenseGeneratorIdentifier): LicenseGeneratorsDetailsType
    {
        $new = clone $this;
        $new->licenseGeneratorIdentifier = $licenseGeneratorIdentifier;

        return $new;
    }
}
