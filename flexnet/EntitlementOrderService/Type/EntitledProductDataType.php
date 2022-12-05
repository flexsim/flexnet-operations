<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitledProductDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null
     */
    private $product;

    /**
     * @var int
     */
    private $quantity;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  int  $quantity
     */
    public function __construct(ProductIdentifierType|null $product = null, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ProductIdentifierType|null  $product
     * @param  int  $quantity
     */
    public static function create(ProductIdentifierType|null $product = null, int $quantity)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ProductIdentifierType|null
    {
        return $this->product;
    }

    public function withProduct(ProductIdentifierType|null $product): EntitledProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function withQuantity(int $quantity): EntitledProductDataType
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }
}
