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
    public function __construct(FeatureIdentifierWithCountDataType|array $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public static function create(FeatureIdentifierWithCountDataType|array $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null
     */
    public function getFeature(): FeatureIdentifierWithCountDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>|null  $feature
     */
    public function withFeature(FeatureIdentifierWithCountDataType|array|null $feature): FeaturesListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
