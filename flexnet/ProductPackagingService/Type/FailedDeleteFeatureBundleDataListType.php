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
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(\Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataType|array|null $failedFeatureBundle): \Flexnet\ProductPackagingService\Type\FailedDeleteFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
