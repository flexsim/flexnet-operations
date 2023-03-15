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
    public function __construct(FeatureStateChangeDataType|array|null $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null  $feature
     */
    public static function create(FeatureStateChangeDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null
     */
    public function getFeature(): FeatureStateChangeDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureStateChangeDataType>|null  $feature
     */
    public function withFeature(FeatureStateChangeDataType|array|null $feature): FeatureStateChangeListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
