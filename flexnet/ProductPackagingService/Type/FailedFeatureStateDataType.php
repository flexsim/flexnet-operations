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
    public function __construct(FeatureStateDataType $feature, string $reason)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    public static function create(FeatureStateDataType $feature, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getFeature(): FeatureStateDataType
    {
        return $this->feature;
    }

    public function withFeature(FeatureStateDataType $feature): FailedFeatureStateDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedFeatureStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
