<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedProductDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null
     */
    private $createdProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null  $createdProduct
     */
    public function __construct(CreatedProductDataType|array|null $createdProduct = null)
    {
        $this->createdProduct = $createdProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null  $createdProduct
     */
    public static function create(CreatedProductDataType|array|null $createdProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null
     */
    public function getCreatedProduct(): CreatedProductDataType|array|null
    {
        return $this->createdProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null  $createdProduct
     */
    public function withCreatedProduct(CreatedProductDataType|array|null $createdProduct): CreatedProductDataListType
    {
        $new = clone $this;
        $new->createdProduct = $createdProduct;

        return $new;
    }
}
