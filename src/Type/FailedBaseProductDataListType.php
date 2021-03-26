<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedBaseProductDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType
     */
    private $failedBaseProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array $failedBaseProduct
     */
    public function __construct($failedBaseProduct = null)
    {
        $this->failedBaseProduct = $failedBaseProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array $failedBaseProduct
     */
    public static function create($failedBaseProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType
     */
    public function getFailedBaseProduct()
    {
        return $this->failedBaseProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType $failedBaseProduct
     * @return $this
     */
    public function setFailedBaseProduct($failedBaseProduct)
    {
        $this->failedBaseProduct = $failedBaseProduct;
        return $this;
    }


}

