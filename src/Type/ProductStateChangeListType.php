<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductStateChangeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductStateChangeDataType
     */
    private $product;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductStateChangeDataType|array $product
     */
    public function __construct($product = null)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductStateChangeDataType|array $product
     */
    public static function create($product = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductStateChangeDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductStateChangeDataType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}

