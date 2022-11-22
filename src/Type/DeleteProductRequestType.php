<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteProductRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteProductDataType
     */
    protected $product;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeleteProductDataType  $product
     */
    public function __construct(DeleteProductDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeleteProductDataType  $product
     */
    public static function create(DeleteProductDataType $product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteProductDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeleteProductDataType  $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
