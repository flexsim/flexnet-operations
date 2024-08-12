<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateType
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\ProductPackagingService\Type\StateType $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getStateToSet(): \Flexnet\ProductPackagingService\Type\StateType
    {
        return $this->stateToSet;
    }

    public function withStateToSet(\Flexnet\ProductPackagingService\Type\StateType $stateToSet): \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
