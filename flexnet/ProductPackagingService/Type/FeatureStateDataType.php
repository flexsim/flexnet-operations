<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, string $stateToSet)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateToSet = $stateToSet;
    }

    public static function create(FeatureIdentifierType $featureIdentifier, string $stateToSet)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): FeatureStateDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    public function getStateToSet(): string
    {
        return $this->stateToSet;
    }

    public function withStateToSet(string $stateToSet): FeatureStateDataType
    {
        $new = clone $this;
        $new->stateToSet = $stateToSet;

        return $new;
    }
}
