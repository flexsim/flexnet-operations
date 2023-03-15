<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersForProductCategoryRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType  $productCategory
     */
    public function __construct(ProductCategoryDataType $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType  $productCategory
     */
    public static function create(ProductCategoryDataType $productCategory)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
     */
    public function getProductCategory(): ProductCategoryDataType
    {
        return $this->productCategory;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\ProductCategoryDataType  $productCategory
     */
    public function withProductCategory(ProductCategoryDataType $productCategory): GetUsersForProductCategoryRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
