<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateFeatureRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureDataType|array<\Flexnet\ProductPackagingService\Type\FeatureDataType>
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|array<\Flexnet\ProductPackagingService\Type\FeatureDataType>  $feature
     */
    public function __construct(FeatureDataType|array $feature)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|array<\Flexnet\ProductPackagingService\Type\FeatureDataType>  $feature
     */
    public static function create(FeatureDataType|array $feature)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureDataType|array<\Flexnet\ProductPackagingService\Type\FeatureDataType>
     */
    public function getFeature(): FeatureDataType|array
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureDataType|array<\Flexnet\ProductPackagingService\Type\FeatureDataType>  $feature
     */
    public function withFeature(FeatureDataType|array $feature): CreateFeatureRequestType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
