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
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array|null $feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null  $feature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array|null $feature = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null
     */
    public function getFeature(): \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array|null
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array<\Flexnet\ProductPackagingService\Type\FeatureQueryDataType>|null  $feature
     */
    public function withFeature(\Flexnet\ProductPackagingService\Type\FeatureQueryDataType|array|null $feature): \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseDataType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
