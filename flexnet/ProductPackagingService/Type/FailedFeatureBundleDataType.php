<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureBundleDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType $featureBundle): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
