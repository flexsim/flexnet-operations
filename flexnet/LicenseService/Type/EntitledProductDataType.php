<?php

namespace Flexnet\LicenseService\Type;

class EntitledProductDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\ProductIdentifierType|null
     */
    private $product;

    /**
     * @var int
     */
    private $quantity;

    /**
     * Constructor
     */
    public function __construct(int $quantity, ?\Flexnet\LicenseService\Type\ProductIdentifierType $product = null)
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }

    public static function create(int $quantity, ?\Flexnet\LicenseService\Type\ProductIdentifierType $product = null)
    {
        return new static(...\func_get_args());
    }

    public function getProduct(): ?\Flexnet\LicenseService\Type\ProductIdentifierType
    {
        return $this->product;
    }

    public function withProduct(?\Flexnet\LicenseService\Type\ProductIdentifierType $product): \Flexnet\LicenseService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function withQuantity(int $quantity): \Flexnet\LicenseService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }
}
