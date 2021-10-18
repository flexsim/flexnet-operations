<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BaseProductRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\BaseProductDataType
     */
    protected $baseProduct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\BaseProductDataType $baseProduct
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\BaseProductDataType $baseProduct)
    {
        $this->baseProduct = $baseProduct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\BaseProductDataType $baseProduct
     */
    public static function create(\Flexsim\FlexnetOperations\Type\BaseProductDataType $baseProduct)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\BaseProductDataType
     */
    public function getBaseProduct()
    {
        return $this->baseProduct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\BaseProductDataType $baseProduct
     * @return $this
     */
    public function setBaseProduct($baseProduct)
    {
        $this->baseProduct = $baseProduct;
        return $this;
    }
}
