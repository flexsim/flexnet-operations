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
    public function __construct(int $quantity, ProductIdentifierType $product = null)
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public static function create(int $quantity, ProductIdentifierType $product = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ?ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?ProductIdentifierType $product): EntitledProductDataType
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
