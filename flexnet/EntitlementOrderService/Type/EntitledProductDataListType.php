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
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProduct = null)
    {
        $this->entitledProduct = $entitledProduct;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null
     */
    public function getEntitledProduct(): \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null
    {
        return $this->entitledProduct;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array<\Flexnet\EntitlementOrderService\Type\EntitledProductDataType>|null  $entitledProduct
     */
    public function withEntitledProduct(\Flexnet\EntitlementOrderService\Type\EntitledProductDataType|array|null $entitledProduct): \Flexnet\EntitlementOrderService\Type\EntitledProductDataListType
    {
        $new = clone $this;
        $new->entitledProduct = $entitledProduct;

        return $new;
    }
}
