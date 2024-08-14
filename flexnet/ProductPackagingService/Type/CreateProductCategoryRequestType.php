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
    public function __construct(\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>  $productCategory
     */
    public static function create(\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array $productCategory)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>
     */
    public function getProductCategory(): \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array<\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType>  $productCategory
     */
    public function withProductCategory(\Flexnet\ProductPackagingService\Type\CreateProductCategoryDataType|array $productCategory): \Flexnet\ProductPackagingService\Type\CreateProductCategoryRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
