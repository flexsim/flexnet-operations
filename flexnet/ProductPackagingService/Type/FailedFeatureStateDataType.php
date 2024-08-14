<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureStateDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureStateDataType
     */
    private $feature;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureStateDataType $feature, string $reason)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\FeatureStateDataType $feature, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFeature(): \Flexnet\ProductPackagingService\Type\FeatureStateDataType
    {
        return $this->feature;
    }

    public function withFeature(\Flexnet\ProductPackagingService\Type\FeatureStateDataType $feature): \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
