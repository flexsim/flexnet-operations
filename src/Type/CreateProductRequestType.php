<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateProductRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType
     */
    protected $product;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductDataType  $product
     */
    public function __construct(CreateProductDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductDataType  $product
     */
    public static function create(CreateProductDataType $product)
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
     * @param  \Flexsim\FlexnetOperations\Type\CreateProductDataType  $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
