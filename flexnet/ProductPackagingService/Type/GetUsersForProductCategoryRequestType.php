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
     */
    public function __construct(ProductCategoryDataType $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public static function create(ProductCategoryDataType $productCategory)
    {
        return new static(...\func_get_args());
    }

    public function getProductCategory(): ProductCategoryDataType
    {
        return $this->productCategory;
    }

    public function withProductCategory(ProductCategoryDataType $productCategory): GetUsersForProductCategoryRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
