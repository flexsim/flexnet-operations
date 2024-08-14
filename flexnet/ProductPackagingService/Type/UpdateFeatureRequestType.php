<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateFeatureRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType>
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType>  $feature
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array $feature)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType>  $feature
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array $feature)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType>
     */
    public function getFeature(): \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType>  $feature
     */
    public function withFeature(\Flexnet\ProductPackagingService\Type\UpdateFeatureDataType|array $feature): \Flexnet\ProductPackagingService\Type\UpdateFeatureRequestType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
