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
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType $productCategory)
    {
        return new static(...\func_get_args());
    }

    public function getProductCategory(): \Flexnet\ProductPackagingService\Type\ProductCategoryDataType
    {
        return $this->productCategory;
    }

    public function withProductCategory(\Flexnet\ProductPackagingService\Type\ProductCategoryDataType $productCategory): \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryRequestType
    {
        $new = clone $this;
        $new->productCategory = $productCategory;

        return $new;
    }
}
