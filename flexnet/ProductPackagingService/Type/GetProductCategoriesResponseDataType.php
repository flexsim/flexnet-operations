<?php

namespace Flexnet\ProductPackagingService\Type;

class GetProductCategoriesResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null  $productCategory
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array|null $productCategory = null)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null  $productCategory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array|null $productCategory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null
     */
    public function getProductCategory(): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array|null
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null  $productCategory
     */
    public function withProductCategory(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array|null $productCategory): \Flexnet\ProductPackagingService\Type\GetProductCategoriesResponseDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
