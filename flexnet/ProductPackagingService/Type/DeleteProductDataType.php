<?php

namespace Flexnet\ProductPackagingService\Type;

class DeleteProductDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    public static function create(ProductIdentifierType $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): DeleteProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}
