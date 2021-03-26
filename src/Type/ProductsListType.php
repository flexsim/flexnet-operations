<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType
     */
    private $product;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $product
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $product
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}

