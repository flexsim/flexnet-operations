<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureBundleStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType  $featureBundle
     */
    public function __construct(FeatureBundleStateDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType  $featureBundle
     */
    public static function create(FeatureBundleStateDataType $featureBundle, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType
     */
    public function getFeatureBundle(): FeatureBundleStateDataType
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType  $featureBundle
     */
    public function withFeatureBundle(FeatureBundleStateDataType $featureBundle): FailedFeatureBundleStateDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedFeatureBundleStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
