<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteFeatureRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureDataType>
     */
    private $feature;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureDataType>  $feature
     */
    public function __construct(DeleteFeatureDataType|array $feature)
    {
        $this->feature = $feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureDataType>  $feature
     */
    public static function create(DeleteFeatureDataType|array $feature)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureDataType>
     */
    public function getFeature(): DeleteFeatureDataType|array
    {
        return $this->feature;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureDataType>  $feature
     */
    public function withFeature(DeleteFeatureDataType|array $feature): DeleteFeatureRequestType
    {
        $new = clone $this;
        $new->feature = $feature;

        return $new;
    }
}
