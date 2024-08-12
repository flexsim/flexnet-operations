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
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType $featureIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureIdentifier(): \Flexnet\EntitlementOrderService\Type\FeatureIdentifierType
    {
        return $this->featureIdentifier;
    }

    public function withFeatureIdentifier(\Flexnet\EntitlementOrderService\Type\FeatureIdentifierType $featureIdentifier): \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType
    {
        $new = clone $this;
        $new->featureIdentifier = $featureIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function withStateChangeRecord(\Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord): \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
