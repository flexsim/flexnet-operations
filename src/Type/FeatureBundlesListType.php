<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundlesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;
        return $this;
    }


}

