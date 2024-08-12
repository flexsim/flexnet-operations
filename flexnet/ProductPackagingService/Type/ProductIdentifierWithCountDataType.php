<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductIdentifierWithCountDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PositiveInteger
     */
    private $count;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        $this->productIdentifier = $productIdentifier;
        $this->count = $count;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, \Flexnet\ProductPackagingService\Type\PositiveInteger $count)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier): \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getCount(): \Flexnet\ProductPackagingService\Type\PositiveInteger
    {
        return $this->count;
    }

    public function withCount(\Flexnet\ProductPackagingService\Type\PositiveInteger $count): \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
