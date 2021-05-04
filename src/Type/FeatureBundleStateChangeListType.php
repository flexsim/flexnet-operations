<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleStateChangeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeDataType|array 
     */
    private $featureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeDataType|array $featureBundle
     */
    public function __construct($featureBundle = null)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeDataType|array $featureBundle
     */
    public static function create($featureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeDataType|array 
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleStateChangeDataType|array $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;
        return $this;
    }
}
