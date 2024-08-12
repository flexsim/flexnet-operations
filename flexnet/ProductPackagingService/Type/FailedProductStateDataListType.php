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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array|null $failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null  $failedProduct
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array|null $failedProduct = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null
     */
    public function getFailedProduct(): \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array|null
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductStateDataType>|null  $failedProduct
     */
    public function withFailedProduct(\Flexnet\ProductPackagingService\Type\FailedProductStateDataType|array|null $failedProduct): \Flexnet\ProductPackagingService\Type\FailedProductStateDataListType
    {
        $new = clone $this;
        $new->failedProduct = $failedProduct;

        return $new;
    }
}
