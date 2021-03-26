<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductIdentifierWithCountDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var int $count
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, int $count)
    {
        $this->productIdentifier = $productIdentifier;
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var int $count
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, int $count)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @return $this
     */
    public function setProductIdentifier($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

