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
    public function __construct(LicenseModelIdentifierType|array $licenseModel)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModel
     */
    public static function create(LicenseModelIdentifierType|array $licenseModel)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>
     */
    public function getLicenseModel(): LicenseModelIdentifierType|array
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|array<\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType>  $licenseModel
     */
    public function withLicenseModel(LicenseModelIdentifierType|array $licenseModel): LicenseModelsListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
