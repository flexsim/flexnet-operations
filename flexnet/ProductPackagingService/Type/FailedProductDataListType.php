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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedProductDataType|array|null $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null  $failedProduct
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedProductDataType|array|null $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null
     */
    public function getFailedProduct(): \Flexnet\ProductPackagingService\Type\FailedProductDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductDataType>|null  $failedProduct
     */
    public function withFailedProduct(\Flexnet\ProductPackagingService\Type\FailedProductDataType|array|null $failedProduct): \Flexnet\ProductPackagingService\Type\FailedProductDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
