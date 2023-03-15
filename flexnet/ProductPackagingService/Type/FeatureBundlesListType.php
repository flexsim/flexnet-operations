<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundlesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public function __construct(FeatureBundleIdentifierWithCountDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public static function create(FeatureBundleIdentifierWithCountDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>
     */
    public function getFeatureBundle(): FeatureBundleIdentifierWithCountDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>  $featureBundle
     */
    public function withFeatureBundle(FeatureBundleIdentifierWithCountDataType|array $featureBundle): FeatureBundlesListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
