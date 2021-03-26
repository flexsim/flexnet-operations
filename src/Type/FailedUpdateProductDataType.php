<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateProductDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductDataType
     */
    private $product;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductDataType $product
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateProductDataType $product, string $reason = null)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateProductDataType $product
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateProductDataType $product, string $reason = null)
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

