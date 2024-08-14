<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateFeatureBundleDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle): \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
