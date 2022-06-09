<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateProductDataType
     */
    protected $product;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateProductDataType $product = null, string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateProductDataType $product
     * @param string $reason
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
