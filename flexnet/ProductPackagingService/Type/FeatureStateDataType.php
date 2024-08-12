<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(\Flexnet\ProductPackagingService\Type\FeatureIdentifierType $featureIdentifier): \Flexnet\ProductPackagingService\Type\FeatureStateDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\ProductPackagingService\Type\StateType $stateToSet): \Flexnet\ProductPackagingService\Type\FeatureStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
