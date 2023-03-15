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
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function __construct(ProductIdentifierType $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public static function create(ProductIdentifierType $productIdentifier)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierType  $productIdentifier
     */
    public function withProductIdentifier(ProductIdentifierType $productIdentifier): DeleteProductDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }
}
