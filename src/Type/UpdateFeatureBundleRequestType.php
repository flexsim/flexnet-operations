<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateFeatureBundleRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType
     */
    protected $featureBundle;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType  $featureBundle
     */
    public function __construct(UpdateFeatureBundleDataType $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType  $featureBundle
     */
    public static function create(UpdateFeatureBundleDataType $featureBundle)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType  $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;

        return $this;
    }
}
