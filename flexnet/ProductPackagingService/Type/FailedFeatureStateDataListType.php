<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureStateDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null
     */
    private $failedFeature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null  $failedFeature
     */
    public function __construct(FailedFeatureStateDataType|array $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null  $failedFeature
     */
    public static function create(FailedFeatureStateDataType|array $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null
     */
    public function getFailedFeature(): FailedFeatureStateDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null  $failedFeature
     */
    public function withFailedFeature(FailedFeatureStateDataType|array|null $failedFeature): FailedFeatureStateDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
