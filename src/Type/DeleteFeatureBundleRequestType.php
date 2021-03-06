<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteFeatureBundleRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType
     */
    protected $featureBundle;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType $featureBundle
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType $featureBundle
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType $featureBundle)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleDataType $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;

        return $this;
    }
}
