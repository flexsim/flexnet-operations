<?php

namespace Flexnet\EntitlementOrderService\Type;

class ProductStateChangeListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null  $product
     */
    public function __construct(ProductStateChangeDataType|array|null $product = null)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null  $product
     */
    public static function create(ProductStateChangeDataType|array|null $product = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null
     */
    public function getProduct(): ProductStateChangeDataType|array|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null  $product
     * @return ProductStateChangeListType
     */
    public function withProduct(ProductStateChangeDataType|array|null $product): ProductStateChangeListType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
