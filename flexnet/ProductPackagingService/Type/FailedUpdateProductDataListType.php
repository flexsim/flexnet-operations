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
    public function __construct(FailedUpdateProductDataType|array $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null  $failedProduct
     */
    public static function create(FailedUpdateProductDataType|array $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null
     */
    public function getFailedProduct(): FailedUpdateProductDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateProductDataType>|null  $failedProduct
     */
    public function withFailedProduct(FailedUpdateProductDataType|array|null $failedProduct): FailedUpdateProductDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
