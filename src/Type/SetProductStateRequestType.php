<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetProductStateRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductStateDataType
     */
    protected $product;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateDataType  $product
     */
    public function __construct(ProductStateDataType $product)
    {
        $this->product = $product;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateDataType  $product
     */
    public static function create(ProductStateDataType $product)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductStateDataType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductStateDataType  $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
