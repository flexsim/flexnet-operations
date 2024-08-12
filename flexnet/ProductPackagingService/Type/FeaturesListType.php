<?php

namespace Flexnet\ProductPackagingService\Type;

class FeaturesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    public function getFeature(): \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function withFeature(\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array|null $feature): \Flexnet\ProductPackagingService\Type\FeaturesListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
