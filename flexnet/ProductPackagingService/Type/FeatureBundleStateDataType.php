<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, string $stateToSet)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType
     */
    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     */
    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): FeatureBundleStateDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): FeatureBundleStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
