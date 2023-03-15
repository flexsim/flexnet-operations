<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitledProductDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    private $entitledProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public function __construct(EntitledProductDataType|array|null $entitledProduct = null)
    {
        $this->entitledProduct = $entitledProduct;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public static function create(EntitledProductDataType|array|null $entitledProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProduct(): EntitledProductDataType|array|null
    {
        return $this->entitledProduct;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public function withEntitledProduct(EntitledProductDataType|array|null $entitledProduct): EntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProduct = $entitledProduct;

        return $new;
    }
}
