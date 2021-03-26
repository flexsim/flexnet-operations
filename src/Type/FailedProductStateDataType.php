<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedProductStateDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductStateDataType
     */
    private $product;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductStateDataType $product
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductStateDataType $product, string $reason)
    {
        $this->product = $product;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductStateDataType $product
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductStateDataType $product, string $reason)
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
     * @param \Flexsim\FlexnetOperations\Type\ProductStateDataType $product
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

