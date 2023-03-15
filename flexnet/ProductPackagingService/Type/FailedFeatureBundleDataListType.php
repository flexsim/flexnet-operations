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
    public function __construct(FailedFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(FailedFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): FailedFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(FailedFeatureBundleDataType|array|null $failedFeatureBundle): FailedFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
