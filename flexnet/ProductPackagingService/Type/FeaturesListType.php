<?php

namespace Flexnet\ProductPackagingService\Type;

class FeaturesListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>  $feature
     */
    public function __construct(FeatureIdentifierWithCountDataType|array $feature)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>  $feature
     */
    public static function create(FeatureIdentifierWithCountDataType|array $feature)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>
     */
    public function getFeature(): FeatureIdentifierWithCountDataType|array
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType|array<\Flexnet\ProductPackagingService\Type\FeatureIdentifierWithCountDataType>  $feature
     */
    public function withFeature(FeatureIdentifierWithCountDataType|array $feature): FeaturesListType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
