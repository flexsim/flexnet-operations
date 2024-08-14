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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array|null $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null  $failedFeature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array|null $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null
     */
    public function getFailedFeature(): \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType>|null  $failedFeature
     */
    public function withFailedFeature(\Flexnet\ProductPackagingService\Type\FailedFeatureStateDataType|array|null $failedFeature): \Flexnet\ProductPackagingService\Type\FailedFeatureStateDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
