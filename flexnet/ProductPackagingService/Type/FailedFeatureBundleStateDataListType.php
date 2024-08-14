<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedFeatureBundleStateDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null  $failedFeatureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null  $failedFeatureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null
     */
    public function getFailedFeatureBundle(): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array|null $failedFeatureBundle): \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
