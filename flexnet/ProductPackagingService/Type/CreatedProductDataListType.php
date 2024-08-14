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
    public function __construct(\Flexnet\ProductPackagingService\Type\CreatedProductDataType|array|null $createdProduct = null)
    {
        $this->createdProduct = $createdProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null  $createdProduct
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreatedProductDataType|array|null $createdProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null
     */
    public function getCreatedProduct(): \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array|null
    {
        return $this->createdProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreatedProductDataType|array<\Flexnet\ProductPackagingService\Type\CreatedProductDataType>|null  $createdProduct
     */
    public function withCreatedProduct(\Flexnet\ProductPackagingService\Type\CreatedProductDataType|array|null $createdProduct): \Flexnet\ProductPackagingService\Type\CreatedProductDataListType
    {
        $new = clone $this;
        $new->createdProduct = $createdProduct;

        return $new;
    }
}
