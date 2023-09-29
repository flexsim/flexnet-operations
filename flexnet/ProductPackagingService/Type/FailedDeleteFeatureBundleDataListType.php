<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedDeleteFeatureBundleDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function __construct(FailedDeleteFeatureBundleDataType|array $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(FailedDeleteFeatureBundleDataType|array $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): FailedDeleteFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(FailedDeleteFeatureBundleDataType|array|null $failedFeatureBundle): FailedDeleteFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
