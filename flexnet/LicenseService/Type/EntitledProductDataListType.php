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
     * @param \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null $entitledProduct
     */
    public function __construct(\Flexnet\LicenseService\Type\EntitledProductDataType|array|null $entitledProduct = null)
    {
        $this->entitledProduct = $entitledProduct;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null $entitledProduct
     */
    public static function create(\Flexnet\LicenseService\Type\EntitledProductDataType|array|null $entitledProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProduct() : \Flexnet\LicenseService\Type\EntitledProductDataType|array|null
    {
        return $this->entitledProduct;
    }

    /**
     * @param \Flexnet\LicenseService\Type\EntitledProductDataType|array<\Flexnet\LicenseService\Type\EntitledProductDataType>|null $entitledProduct
     * @return EntitledProductDataListType
     */
    public function withEntitledProduct(\Flexnet\LicenseService\Type\EntitledProductDataType|array|null $entitledProduct) : \Flexnet\LicenseService\Type\EntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProduct = $entitledProduct;

        return $new;
    }
}

