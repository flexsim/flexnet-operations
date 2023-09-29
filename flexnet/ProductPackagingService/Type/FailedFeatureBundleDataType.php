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
    public function __construct(CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    public static function create(CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): CreateFeatureBundleDataType
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(CreateFeatureBundleDataType $featureBundle): FailedFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
