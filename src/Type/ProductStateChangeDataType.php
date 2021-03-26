<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductStateChangeDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, $stateChangeRecord = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ProductIdentifierType $productIdentifier, $stateChangeRecord = null)
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
     * @return \Flexsim\FlexnetOperations\Type\StateChangeDataType
     */
    public function getStateChangeRecord()
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateChangeDataType $stateChangeRecord
     * @return $this
     */
    public function setStateChangeRecord($stateChangeRecord)
    {
        $this->stateChangeRecord = $stateChangeRecord;
        return $this;
    }


}

