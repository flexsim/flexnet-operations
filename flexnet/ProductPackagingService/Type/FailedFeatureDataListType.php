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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array|null $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null  $failedFeature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array|null $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null
     */
    public function getFailedFeature(): \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureDataType>|null  $failedFeature
     */
    public function withFailedFeature(\Flexnet\ProductPackagingService\Type\FailedFeatureDataType|array|null $failedFeature): \Flexnet\ProductPackagingService\Type\FailedFeatureDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
