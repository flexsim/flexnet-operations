<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteProductDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array
     */
    protected $failedProduct;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array  $failedProduct
     */
    public function __construct($failedProduct = null)
    {
        $this->failedProduct = $failedProduct;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array  $failedProduct
     */
    public static function create($failedProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array
     */
    public function getFailedProduct()
    {
        return $this->failedProduct;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteProductDataType|array  $failedProduct
     * @return $this
     */
    public function setFailedProduct($failedProduct)
    {
        $this->failedProduct = $failedProduct;

        return $this;
    }
}
