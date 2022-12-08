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
     *
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @param int $quantity
     */
    public function __construct(\Flexnet\LicenseService\Type\ProductIdentifierType|null $product = null, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @param int $quantity
     */
    public static function create(\Flexnet\LicenseService\Type\ProductIdentifierType|null $product = null, int $quantity)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ProductIdentifierType|null
     */
    public function getProduct() : \Flexnet\LicenseService\Type\ProductIdentifierType|null
    {
        return $this->product;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ProductIdentifierType|null $product
     * @return EntitledProductDataType
     */
    public function withProduct(\Flexnet\LicenseService\Type\ProductIdentifierType|null $product) : \Flexnet\LicenseService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return EntitledProductDataType
     */
    public function withQuantity(int $quantity) : \Flexnet\LicenseService\Type\EntitledProductDataType
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }
}

