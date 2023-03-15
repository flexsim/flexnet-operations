<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateFeatureBundleRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType>
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType>  $featureBundle
     */
    public function __construct(CreateFeatureBundleDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType>  $featureBundle
     */
    public static function create(CreateFeatureBundleDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType>
     */
    public function getFeatureBundle(): CreateFeatureBundleDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\CreateFeatureBundleDataType>  $featureBundle
     */
    public function withFeatureBundle(CreateFeatureBundleDataType|array $featureBundle): CreateFeatureBundleRequestType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
