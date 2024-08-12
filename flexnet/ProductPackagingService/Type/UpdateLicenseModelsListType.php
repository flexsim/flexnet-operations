<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateLicenseModelsListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>
     */
    private $licenseModelIdentifiers;

    /**
     * @var \Flexnet\ProductPackagingService\Type\CollectionOperationType
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModelIdentifiers
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers, \Flexnet\ProductPackagingService\Type\CollectionOperationType $opType)
    {
        $this->licenseModelIdentifiers = $licenseModelIdentifiers;
        $this->opType = $opType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModelIdentifiers
     */
    public static function create(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers, \Flexnet\ProductPackagingService\Type\CollectionOperationType $opType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>
     */
    public function getLicenseModelIdentifiers(): \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array
    {
        return $this->licenseModelIdentifiers;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModelIdentifiers
     */
    public function withLicenseModelIdentifiers(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModelIdentifiers): \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType
    {
        $new = clone $this;
        $new->licenseModelIdentifiers = $licenseModelIdentifiers;

        return $new;
    }

    public function getOpType(): \Flexnet\ProductPackagingService\Type\CollectionOperationType
    {
        return $this->opType;
    }

    public function withOpType(\Flexnet\ProductPackagingService\Type\CollectionOperationType $opType): \Flexnet\ProductPackagingService\Type\UpdateLicenseModelsListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
