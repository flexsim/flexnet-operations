<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductIdentifierWithCountDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $productIdentifier;

    /**
     * @var int
     */
    protected $count;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productIdentifier
     * @param  int  $count
     */
    public function __construct(ProductIdentifierType $productIdentifier, int $count)
    {
        $this->productIdentifier = $productIdentifier;
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productIdentifier
     * @param  int  $count
     */
    public static function create(ProductIdentifierType $productIdentifier, int $count)
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
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productIdentifier
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
     * @param  int  $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }
}
