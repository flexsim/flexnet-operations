<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductCategoryDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedProductCategoryDataType|array 
     */
    protected $failedProductCategory;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedProductCategoryDataType|array $failedProductCategory
     */
    public function __construct($failedProductCategory = null)
    {
        $this->failedProductCategory = $failedProductCategory;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedProductCategoryDataType|array $failedProductCategory
     */
    public static function create($failedProductCategory = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedProductCategoryDataType|array 
     */
    public function getFailedProductCategory()
    {
        return $this->failedProductCategory;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedProductCategoryDataType|array $failedProductCategory
     * @return $this
     */
    public function setFailedProductCategory($failedProductCategory)
    {
        $this->failedProductCategory = $failedProductCategory;
        return $this;
    }
}
