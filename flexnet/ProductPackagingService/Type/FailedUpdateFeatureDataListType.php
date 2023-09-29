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
    public function __construct(FailedUpdateFeatureDataType|array $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null  $failedFeature
     */
    public static function create(FailedUpdateFeatureDataType|array $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null
     */
    public function getFailedFeature(): FailedUpdateFeatureDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureDataType>|null  $failedFeature
     */
    public function withFailedFeature(FailedUpdateFeatureDataType|array|null $failedFeature): FailedUpdateFeatureDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
