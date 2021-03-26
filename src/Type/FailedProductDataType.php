<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType
     */
    private $product;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateProductDataType $product = null, string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateProductDataType $product = null, string $reason = null)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

