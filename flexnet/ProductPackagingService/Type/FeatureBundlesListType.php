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
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array|null $featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null  $featureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array|null $featureBundle = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null
     */
    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array|null
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType>|null  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\FeatureBundleIdentifierWithCountDataType|array|null $featureBundle): \Flexnet\ProductPackagingService\Type\FeatureBundlesListType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
