<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateProductDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null  $failedProduct
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array|null $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null  $failedProduct
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array|null $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null
     */
    public function getFailedProduct(): \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null  $failedProduct
     */
    public function withFailedProduct(\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array|null $failedProduct): \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
