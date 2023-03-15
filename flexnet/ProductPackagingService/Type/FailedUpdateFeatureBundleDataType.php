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
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType  $featureBundle
     * @param  string|null  $reason
     */
    public function __construct(UpdateFeatureBundleDataType $featureBundle, string|null $reason = null)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType  $featureBundle
     * @param  string|null  $reason
     */
    public static function create(UpdateFeatureBundleDataType $featureBundle, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType
     */
    public function getFeatureBundle(): UpdateFeatureBundleDataType
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType  $featureBundle
     */
    public function withFeatureBundle(UpdateFeatureBundleDataType $featureBundle): FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedUpdateFeatureBundleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
