<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureDataType|null
     */
    private $feature;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(FeatureDataType $feature = null, string $reason = null)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    public static function create(FeatureDataType $feature = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeature(): ?FeatureDataType
    {
        return $this->feature;
    }

    public function withFeature(?FeatureDataType $feature): FailedFeatureDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
