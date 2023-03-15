<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteFeatureBundleRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType>
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType>  $featureBundle
     */
    public function __construct(DeleteFeatureBundleDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType>  $featureBundle
     */
    public static function create(DeleteFeatureBundleDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType>
     */
    public function getFeatureBundle(): DeleteFeatureBundleDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleDataType>  $featureBundle
     */
    public function withFeatureBundle(DeleteFeatureBundleDataType|array $featureBundle): DeleteFeatureBundleRequestType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
