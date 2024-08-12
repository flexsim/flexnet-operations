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
    public function __construct(\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array|null $product = null)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null  $product
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array|null $product = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null
     */
    public function getProduct(): \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array|null
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType>|null  $product
     */
    public function withProduct(\Flexnet\EntitlementOrderService\Type\ProductStateChangeDataType|array|null $product): \Flexnet\EntitlementOrderService\Type\ProductStateChangeListType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
