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
    public function __construct(ProductCategoryDataType|array $productCategory = null)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null  $productCategory
     */
    public static function create(ProductCategoryDataType|array $productCategory = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null
     */
    public function getProductCategory(): ProductCategoryDataType|array|null
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\ProductCategoryDataType>|null  $productCategory
     */
    public function withProductCategory(ProductCategoryDataType|array|null $productCategory): GetProductCategoriesResponseDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
