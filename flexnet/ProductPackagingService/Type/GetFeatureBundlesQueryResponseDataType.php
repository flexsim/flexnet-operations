<?php

namespace Flexnet\ProductPackagingService\Type;

class GetFeatureBundlesQueryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null  $featureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null  $featureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null
     */
    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array|null
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array|null $featureBundle): \Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryResponseDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
