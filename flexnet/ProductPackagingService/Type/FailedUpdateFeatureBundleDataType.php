<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateFeatureBundleDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
     */
    private $featureBundle;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(UpdateFeatureBundleDataType $featureBundle, string $reason = null)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    public static function create(UpdateFeatureBundleDataType $featureBundle, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): UpdateFeatureBundleDataType
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(UpdateFeatureBundleDataType $featureBundle): FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
