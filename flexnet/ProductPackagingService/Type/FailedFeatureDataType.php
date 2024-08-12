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
    public function __construct(?\Flexnet\ProductPackagingService\Type\FeatureDataType $feature = null, ?string $reason = null)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\FeatureDataType $feature = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeature(): ?\Flexnet\ProductPackagingService\Type\FeatureDataType
    {
        return $this->feature;
    }

    public function withFeature(?\Flexnet\ProductPackagingService\Type\FeatureDataType $feature): \Flexnet\ProductPackagingService\Type\FailedFeatureDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
