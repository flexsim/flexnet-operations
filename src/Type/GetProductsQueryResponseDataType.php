<?php

namespace Flexsim\FlexnetOperations\Type;

class GetProductsQueryResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryDataType
     */
    private $product;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryDataType|array $product
     */
    public function __construct($product = null)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductQueryDataType|array $product
     */
    public static function create($product = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductQueryDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductQueryDataType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}

