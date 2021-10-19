<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProductRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductDataType
     */
    protected $product;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductDataType $product
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateProductDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductDataType $product
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateProductDataType $product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateProductDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateProductDataType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
}
