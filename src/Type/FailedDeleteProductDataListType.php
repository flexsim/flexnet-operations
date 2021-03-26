<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteProductDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array $failedProduct
     */
    public function __construct($failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array $failedProduct
     */
    public static function create($failedProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType
     */
    public function getFailedProduct()
    {
        return $this->failedProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType $failedProduct
     * @return $this
     */
    public function setFailedProduct($failedProduct)
    {
        $this->failedProduct = $failedProduct;
        return $this;
    }


}

