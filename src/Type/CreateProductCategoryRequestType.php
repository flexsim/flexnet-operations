<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductCategoryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType
     */
    private $productCategory;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType $productCategory
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType $productCategory
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType $productCategory)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
        return $this;
    }


}

