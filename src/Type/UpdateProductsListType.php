<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateProductsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType
     */
    private $productIdentifier;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $productIdentifier
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $productIdentifier, string $opType)
    {
        $this->productIdentifier = $productIdentifier;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $productIdentifier
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $productIdentifier, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType $productIdentifier
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
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }


}

