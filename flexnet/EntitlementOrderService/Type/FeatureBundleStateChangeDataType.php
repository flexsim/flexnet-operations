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
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType $featureBundleIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundleIdentifier(): \Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType
    {
        return $this->featureBundleIdentifier;
    }

    public function withFeatureBundleIdentifier(\Flexnet\EntitlementOrderService\Type\FeatureBundleIdentifierType $featureBundleIdentifier): \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType
    {
        $new = clone $this;
        $new->featureBundleIdentifier = $featureBundleIdentifier;

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
    public function withStateChangeRecord(\Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord): \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
