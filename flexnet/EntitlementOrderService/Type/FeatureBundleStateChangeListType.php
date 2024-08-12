<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureBundleStateChangeListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null  $featureBundle
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null  $featureBundle
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null
     */
    public function getFeatureBundle(): \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array|null
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array|null $featureBundle): \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
