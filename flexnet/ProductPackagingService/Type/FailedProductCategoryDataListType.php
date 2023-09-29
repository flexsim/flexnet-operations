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
    public function __construct(FailedProductCategoryDataType|array $failedProductCategory = null)
    {
        $this->failedProductCategory = $failedProductCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null  $failedProductCategory
     */
    public static function create(FailedProductCategoryDataType|array $failedProductCategory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null
     */
    public function getFailedProductCategory(): FailedProductCategoryDataType|array|null
    {
        return $this->failedProductCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType>|null  $failedProductCategory
     */
    public function withFailedProductCategory(FailedProductCategoryDataType|array|null $failedProductCategory): FailedProductCategoryDataListType
    {
        $new = clone $this;
        $new->failedProductCategory = $failedProductCategory;

        return $new;
    }
}
