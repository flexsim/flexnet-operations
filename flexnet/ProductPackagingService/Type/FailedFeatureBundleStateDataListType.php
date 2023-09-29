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
    public function __construct(FailedFeatureBundleStateDataType|array $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null  $failedFeatureBundle
     */
    public static function create(FailedFeatureBundleStateDataType|array $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null
     */
    public function getFailedFeatureBundle(): FailedFeatureBundleStateDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleStateDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(FailedFeatureBundleStateDataType|array|null $failedFeatureBundle): FailedFeatureBundleStateDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
