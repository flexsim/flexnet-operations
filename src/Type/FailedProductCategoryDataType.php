<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductCategoryDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType
     */
    protected $productCategory;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType  $productCategory
     * @param  string  $reason
     */
    public function __construct(CreateProductCategoryDataType $productCategory = null, string $reason = null)
    {
        $this->productCategory = $productCategory;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType  $productCategory
     * @param  string  $reason
     */
    public static function create(CreateProductCategoryDataType $productCategory = null, string $reason = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductCategoryDataType  $productCategory
     * @return $this
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
