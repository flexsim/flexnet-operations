<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureBundleStateChangeDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(FeatureBundleIdentifierType $featureBundleIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType  $featureBundleIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(FeatureBundleIdentifierType $featureBundleIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(FeatureBundleIdentifierType $featureBundleIdentifier): FeatureBundleStateChangeDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

        return $new;
    }

    public function getStateChangeRecord(): StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    public function withStateChangeRecord(StateChangeDataType|array|null $stateChangeRecord): FeatureBundleStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}