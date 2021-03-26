<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier)
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


}

