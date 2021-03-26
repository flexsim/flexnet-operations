<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitledProductDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $product;

    /**
     * @var int
     */
    private $quantity;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var int $quantity
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @var int $quantity
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $product = null, int $quantity)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

