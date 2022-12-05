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
    public function __construct(FeatureBundleStateChangeDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\FeatureBundleStateChangeDataType>|null  $featureBundle
     */
    public static function create(FeatureBundleStateChangeDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): FeatureBundleStateChangeDataType|array|null
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(FeatureBundleStateChangeDataType|array|null $featureBundle): FeatureBundleStateChangeListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}