<?php

namespace Flexnet\ProductPackagingService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeatureBundleStateRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType>
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType>  $featureBundle
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType>  $featureBundle
     */
    public static function create(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType>
     */
    public function getFeatureBundle(): \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array<\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType>  $featureBundle
     */
    public function withFeatureBundle(\Flexnet\ProductPackagingService\Type\FeatureBundleStateDataType|array $featureBundle): \Flexnet\ProductPackagingService\Type\SetFeatureBundleStateRequestType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
