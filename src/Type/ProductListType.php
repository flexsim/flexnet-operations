<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType|array
     */
    protected $productIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType|array  $productIdentifier
     */
    public function __construct($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType|array  $productIdentifier
     */
    public static function create($productIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierType|array
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType|array  $productIdentifier
     * @return $this
     */
    public function setProductIdentifier($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;

        return $this;
    }
}
