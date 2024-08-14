<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureStateChangeListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null  $feature
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array|null $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null  $feature
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null
     */
    public function getFeature(): \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null  $feature
     */
    public function withFeature(\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array|null $feature): \Flexnet\EntitlementOrderService\Type\FeatureStateChangeListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
