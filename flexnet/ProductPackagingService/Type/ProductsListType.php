<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductsListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    private $product;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $product
     */
    public function __construct(ProductIdentifierWithCountDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $product
     */
    public static function create(ProductIdentifierWithCountDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    public function getProduct(): ProductIdentifierWithCountDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $product
     */
    public function withProduct(ProductIdentifierWithCountDataType|array $product): ProductsListType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
