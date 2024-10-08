<?php

namespace Flexnet\ProductPackagingService\Type;

class ModelIdentifiersDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType>|null
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType>|null  $licenseModel
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array|null $licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType>|null  $licenseModel
     */
    public static function create(\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array|null $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType>|null
     */
    public function getLicenseModel(): \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType>|null  $licenseModel
     */
    public function withLicenseModel(\Flexnet\ProductPackagingService\Type\LicenseModelDetailsType|array|null $licenseModel): \Flexnet\ProductPackagingService\Type\ModelIdentifiersDataListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
