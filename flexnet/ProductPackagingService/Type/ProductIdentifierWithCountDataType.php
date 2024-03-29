<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productIdentifier, int $count)
    {
        $this->productIdentifier = $productIdentifier;
        $this->count = $count;
    }

    public static function create(ProductIdentifierType $productIdentifier, int $count)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): ProductIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): ProductIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
