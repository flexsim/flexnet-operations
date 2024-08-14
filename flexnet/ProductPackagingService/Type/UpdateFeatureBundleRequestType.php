<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateFeatureBundleRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>  $featureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>  $featureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>
     */
    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array $featureBundle): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleRequestType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
