<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array 
     */
    protected $product;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $product
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $product
     */
    public static function create($product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
}
