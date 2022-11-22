<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteProductDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductIdentifierType
     */
    protected $productIdentifier;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productIdentifier
     * @param  string  $reason
     */
    public function __construct(ProductIdentifierType $productIdentifier, string $reason = null)
    {
        $this->productIdentifier = $productIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ProductIdentifierType  $productIdentifier
     * @param  string  $reason
     */
    public static function create(ProductIdentifierType $productIdentifier, string $reason = null)
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
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
