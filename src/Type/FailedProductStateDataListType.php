<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductStateDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedProductStateDataType
     */
    private $failedProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductStateDataType|array $failedProduct
     */
    public function __construct($failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedProductStateDataType|array $failedProduct
     */
    public static function create($failedProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedProductStateDataType
     */
    public function getFailedProduct()
    {
        return $this->failedProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedProductStateDataType $failedProduct
     * @return $this
     */
    public function setFailedProduct($failedProduct)
    {
        $this->failedProduct = $failedProduct;
        return $this;
    }


}

