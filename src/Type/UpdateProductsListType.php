<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateProductsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array
     */
    protected $productIdentifier;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $productIdentifier
     * @var string $opType
     */
    public function __construct($productIdentifier, string $opType)
    {
        $this->productIdentifier = $productIdentifier;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $productIdentifier
     * @var string $opType
     */
    public static function create($productIdentifier, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductIdentifierWithCountDataType|array $productIdentifier
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
