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
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $product)
    {
        $this->product = $product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $product
     */
    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $product)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>
     */
    public function getProduct(): \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array
    {
        return $this->product;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType>  $product
     */
    public function withProduct(\Flexnet\ProductPackagingService\Type\ProductIdentifierWithCountDataType|array $product): \Flexnet\ProductPackagingService\Type\ProductsListType
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}
