<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductCategoryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>  $productCategory
     */
    public function __construct(CreateProductCategoryDataType|array $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>  $productCategory
     */
    public static function create(CreateProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>
     */
    public function getProductCategory(): CreateProductCategoryDataType|array
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>  $productCategory
     */
    public function withProductCategory(CreateProductCategoryDataType|array $productCategory): CreateProductCategoryRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
