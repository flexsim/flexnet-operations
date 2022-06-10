<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsersForProductCategoryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productCategory;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }
}
