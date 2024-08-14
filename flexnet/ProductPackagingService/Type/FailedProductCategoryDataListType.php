<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductCategoryDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null
     */
    private $failedProductCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null  $failedProductCategory
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array|null $failedProductCategory = null)
    {
        $this->failedProductCategory = $failedProductCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null  $failedProductCategory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array|null $failedProductCategory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null
     */
    public function getFailedProductCategory(): \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array|null
    {
        return $this->failedProductCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null  $failedProductCategory
     */
    public function withFailedProductCategory(\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array|null $failedProductCategory): \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataListType
    {
        $new = clone $this;
        $new->failedProductCategory = $failedProductCategory;

        return $new;
    }
}
