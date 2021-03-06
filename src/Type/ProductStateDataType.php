<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $productIdentifier;

    /**
     * @var string
     */
    protected $stateToSet;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @param string $stateToSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, string $stateToSet)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @param string $stateToSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, string $stateToSet)
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
     * @return string
     */
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param string $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;

        return $this;
    }
}
