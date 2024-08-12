<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseModelsListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModel
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModel)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModel
     */
    public static function create(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModel)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>
     */
    public function getLicenseModel(): \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModel
     */
    public function withLicenseModel(\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array $licenseModel): \Flexnet\ProductPackagingService\Type\LicenseModelsListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
