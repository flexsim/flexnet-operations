<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureStateChangeDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType  $featureIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(FeatureIdentifierType $featureIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType
     */
    public function getFeatureIdentifier(): FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType  $featureIdentifier
     */
    public function withFeatureIdentifier(FeatureIdentifierType $featureIdentifier): FeatureStateChangeDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function withStateChangeRecord(StateChangeDataType|array|null $stateChangeRecord): FeatureStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
