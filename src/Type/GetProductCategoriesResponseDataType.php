<?php

namespace Flexsim\FlexnetOperations\Type;

class GetProductCategoriesResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productCategory;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType|array $productCategory
     */
    public function __construct($productCategory = null)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType|array $productCategory
     */
    public static function create($productCategory = null)
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
