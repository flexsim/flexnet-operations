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
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType $productCategory = null, ?string $reason = null)
    {
        $this->productCategory = $productCategory;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType $productCategory = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getProductCategory(): ?\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType
    {
        return $this->productCategory;
    }

    public function withProductCategory(?\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType $productCategory): \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedProductCategoryDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
