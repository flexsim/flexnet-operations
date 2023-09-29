<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(ProductIdentifierType $productIdentifier, string $stateToSet)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(ProductIdentifierType $productIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(ProductIdentifierType $productIdentifier): ProductStateDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): ProductStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
