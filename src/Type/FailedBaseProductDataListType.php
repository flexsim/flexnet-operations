<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedBaseProductDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array
     */
    protected $failedBaseProduct;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array $failedBaseProduct
     */
    public function __construct($failedBaseProduct = null)
    {
        $this->failedBaseProduct = $failedBaseProduct;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array $failedBaseProduct
     */
    public static function create($failedBaseProduct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array
     */
    public function getFailedBaseProduct()
    {
        return $this->failedBaseProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedBaseProductDataType|array $failedBaseProduct
     * @return $this
     */
    public function setFailedBaseProduct($failedBaseProduct)
    {
        $this->failedBaseProduct = $failedBaseProduct;

        return $this;
    }
}
