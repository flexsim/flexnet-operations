<?php

namespace Flexnet\ProductPackagingService\Type;

class ProductStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\ProductIdentifierType
     */
    private $productIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        $this->productIdentifier = $productIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getProductIdentifier(): \Flexnet\ProductPackagingService\Type\ProductIdentifierType
    {
        return $this->productIdentifier;
    }

    public function withProductIdentifier(\Flexnet\ProductPackagingService\Type\ProductIdentifierType $productIdentifier): \Flexnet\ProductPackagingService\Type\ProductStateDataType
    {
        $new = clone $this;
        $new->productIdentifier = $productIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\ProductPackagingService\Type\StateType $stateToSet): \Flexnet\ProductPackagingService\Type\ProductStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
