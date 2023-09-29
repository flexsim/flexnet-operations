<?php

namespace Flexnet\LicenseService\Type;

class EntitledProductDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null
     */
    private $entitledProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public function __construct(EntitledProductDataType|array $entitledProduct = null)
    {
        $this->entitledProduct = $entitledProduct;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public static function create(EntitledProductDataType|array $entitledProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProduct(): EntitledProductDataType|array|null
    {
        return $this->entitledProduct;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public function withEntitledProduct(EntitledProductDataType|array|null $entitledProduct): EntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProduct = $entitledProduct;

        return $new;
    }
}
