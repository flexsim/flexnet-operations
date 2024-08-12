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
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType $featureBundle, ?string $reason = null)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType $featureBundle, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
    {
        return $this->featureBundle;
    }

    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType $featureBundle): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
