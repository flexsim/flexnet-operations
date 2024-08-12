<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateFeatureDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null
     */
    private $failedFeature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null  $failedFeature
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array|null $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null  $failedFeature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array|null $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null
     */
    public function getFailedFeature(): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null  $failedFeature
     */
    public function withFailedFeature(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array|null $failedFeature): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
