<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteProductDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType>|null
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType>|null  $failedProduct
     */
    public function __construct(FailedDeleteProductDataType|array $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType>|null  $failedProduct
     */
    public static function create(FailedDeleteProductDataType|array $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType>|null
     */
    public function getFailedProduct(): FailedDeleteProductDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteProductDataType>|null  $failedProduct
     */
    public function withFailedProduct(FailedDeleteProductDataType|array|null $failedProduct): FailedDeleteProductDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
