<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedProductDataType
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductDataType|array $failedProduct
     */
    public function __construct($failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductDataType|array $failedProduct
     */
    public static function create($failedProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedProductDataType
     */
    public function getFailedProduct()
    {
        return $this->failedProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedProductDataType $failedProduct
     * @return $this
     */
    public function setFailedProduct($failedProduct)
    {
        $this->failedProduct = $failedProduct;
        return $this;
    }


}

