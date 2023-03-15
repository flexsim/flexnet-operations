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
    public function __construct(UpdateFeatureBundleDataType|array $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>  $featureBundle
     */
    public static function create(UpdateFeatureBundleDataType|array $featureBundle)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>
     */
    public function getFeatureBundle(): UpdateFeatureBundleDataType|array
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType|array<\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleDataType>  $featureBundle
     */
    public function withFeatureBundle(UpdateFeatureBundleDataType|array $featureBundle): UpdateFeatureBundleRequestType
    {
        $new = clone $this;
        $new->featureBundle = $featureBundle;

        return $new;
    }
}
