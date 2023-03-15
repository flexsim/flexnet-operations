<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedProductCategoryDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|null
     */
    private $productCategory;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|null  $productCategory
     * @param  string|null  $reason
     */
    public function __construct(CreateProductCategoryDataType|null $productCategory = null, string|null $reason = null)
    {
        $this->productCategory = $productCategory;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|null  $productCategory
     * @param  string|null  $reason
     */
    public static function create(CreateProductCategoryDataType|null $productCategory = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|null
     */
    public function getProductCategory(): CreateProductCategoryDataType|null
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|null  $productCategory
     */
    public function withProductCategory(CreateProductCategoryDataType|null $productCategory): FailedProductCategoryDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedProductCategoryDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
