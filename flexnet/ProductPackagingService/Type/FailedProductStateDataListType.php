<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductStateDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null  $failedProduct
     */
    public function __construct(FailedProductStateDataType|array $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null  $failedProduct
     */
    public static function create(FailedProductStateDataType|array $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null
     */
    public function getFailedProduct(): FailedProductStateDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null  $failedProduct
     */
    public function withFailedProduct(FailedProductStateDataType|array|null $failedProduct): FailedProductStateDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
