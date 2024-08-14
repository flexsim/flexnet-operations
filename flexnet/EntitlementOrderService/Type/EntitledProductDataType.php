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
     */
    public function __construct(int $quantity, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null)
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public static function create(int $quantity, ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\EntitlementOrderService\Type\ProductIdentifierType $product): \Flexnet\EntitlementOrderService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function withQuantity(int $quantity): \Flexnet\EntitlementOrderService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }
}
