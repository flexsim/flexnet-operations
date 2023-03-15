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
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|null  $feature
     * @param  string|null  $reason
     */
    public function __construct(FeatureDataType|null $feature = null, string|null $reason = null)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|null  $feature
     * @param  string|null  $reason
     */
    public static function create(FeatureDataType|null $feature = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureDataType|null
     */
    public function getFeature(): FeatureDataType|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|null  $feature
     */
    public function withFeature(FeatureDataType|null $feature): FailedFeatureDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedFeatureDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
