<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeatureBundleStateRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;
        return $this;
    }


}

