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
    public function __construct(FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public static function create(FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null
     */
    public function getFailedFeatureBundle(): FailedUpdateFeatureBundleDataType|array|null
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\FailedUpdateFeatureBundleDataType>|null  $failedFeatureBundle
     */
    public function withFailedFeatureBundle(FailedUpdateFeatureBundleDataType|array|null $failedFeatureBundle): FailedUpdateFeatureBundleDataListType
    {
        $new = clone $this;
        $new->failedFeatureBundle = $failedFeatureBundle;

        return $new;
    }
}
