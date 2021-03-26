<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType
     */
    private $product;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateProductDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateProductDataType $product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateProductDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }


}
