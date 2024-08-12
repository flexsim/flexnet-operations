<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureBundleDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array|null $failedFeatureBundle): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
