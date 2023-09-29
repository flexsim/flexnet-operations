<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null
     */
    private $failedFeature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null  $failedFeature
     */
    public function __construct(FailedFeatureDataType|array $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null  $failedFeature
     */
    public static function create(FailedFeatureDataType|array $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null
     */
    public function getFailedFeature(): FailedFeatureDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null  $failedFeature
     */
    public function withFailedFeature(FailedFeatureDataType|array|null $failedFeature): FailedFeatureDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
