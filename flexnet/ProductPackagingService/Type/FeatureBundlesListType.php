<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundlesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null  $featureBundle
     */
    public function __construct(FeatureBundleIdentifierWithCountDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null  $featureBundle
     */
    public static function create(FeatureBundleIdentifierWithCountDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null
     */
    public function getFeatureBundle(): FeatureBundleIdentifierWithCountDataType|array|null
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null  $featureBundle
     */
    public function withFeatureBundle(FeatureBundleIdentifierWithCountDataType|array|null $featureBundle): FeatureBundlesListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
