<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null  $failedProduct
     */
    public function __construct(FailedProductDataType|array $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null  $failedProduct
     */
    public static function create(FailedProductDataType|array $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null
     */
    public function getFailedProduct(): FailedProductDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null  $failedProduct
     */
    public function withFailedProduct(FailedProductDataType|array|null $failedProduct): FailedProductDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
