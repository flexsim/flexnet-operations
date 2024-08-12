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
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType $featureBundle, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType $featureBundle): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
