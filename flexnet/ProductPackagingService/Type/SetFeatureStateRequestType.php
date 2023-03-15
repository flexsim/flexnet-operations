<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeatureStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureStateDataType>
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureStateDataType>  $feature
     */
    public function __construct(FeatureStateDataType|array $feature)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureStateDataType>  $feature
     */
    public static function create(FeatureStateDataType|array $feature)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureStateDataType>
     */
    public function getFeature(): FeatureStateDataType|array
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureStateDataType>  $feature
     */
    public function withFeature(FeatureStateDataType|array $feature): SetFeatureStateRequestType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
