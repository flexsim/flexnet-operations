<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseTechnologyDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType>|null
     */
    private $licenseTechnology;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType>|null  $licenseTechnology
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array|null $licenseTechnology = null)
    {
        $this->licenseTechnology = $licenseTechnology;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType>|null  $licenseTechnology
     */
    public static function create(\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array|null $licenseTechnology = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType>|null
     */
    public function getLicenseTechnology(): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array|null
    {
        return $this->licenseTechnology;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array<\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType>|null  $licenseTechnology
     */
    public function withLicenseTechnology(\Flexnet\ProductPackagingService\Type\LicenseTechnologyDetailsType|array|null $licenseTechnology): \Flexnet\ProductPackagingService\Type\LicenseTechnologyDataListType
    {
        $new = clone $this;
        $new->licenseTechnology = $licenseTechnology;

        return $new;
    }
}
