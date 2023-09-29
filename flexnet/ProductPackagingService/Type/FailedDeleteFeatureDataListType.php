<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteFeatureDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType>|null
     */
    private $failedFeature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType>|null  $failedFeature
     */
    public function __construct(FailedDeleteFeatureDataType|array $failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType>|null  $failedFeature
     */
    public static function create(FailedDeleteFeatureDataType|array $failedFeature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType>|null
     */
    public function getFailedFeature(): FailedDeleteFeatureDataType|array|null
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureDataType>|null  $failedFeature
     */
    public function withFailedFeature(FailedDeleteFeatureDataType|array|null $failedFeature): FailedDeleteFeatureDataListType
    {
        $new = clone $this;
        $new->failedFeature = $failedFeature;

        return $new;
    }
}
