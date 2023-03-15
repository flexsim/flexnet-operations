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
    public function __construct(FeatureBundleQueryDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null  $featureBundle
     */
    public static function create(FeatureBundleQueryDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null
     */
    public function getFeatureBundle(): FeatureBundleQueryDataType|array|null
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleQueryDataType>|null  $featureBundle
     */
    public function withFeatureBundle(FeatureBundleQueryDataType|array|null $featureBundle): GetFeatureBundlesQueryResponseDataType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
