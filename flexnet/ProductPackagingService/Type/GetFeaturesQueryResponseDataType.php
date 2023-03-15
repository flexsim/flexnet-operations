<?php

namespace Flexnet\ProductPackagingService\Type;

class GetFeaturesQueryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null  $feature
     */
    public function __construct(FeatureQueryDataType|array|null $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null  $feature
     */
    public static function create(FeatureQueryDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null
     */
    public function getFeature(): FeatureQueryDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null  $feature
     */
    public function withFeature(FeatureQueryDataType|array|null $feature): GetFeaturesQueryResponseDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
