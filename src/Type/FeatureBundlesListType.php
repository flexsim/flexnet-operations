<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundlesListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array
     */
    protected $featureBundle;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
     */
    public function __construct($featureBundle)
    {
        $this->featureBundle = $featureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
     */
    public static function create($featureBundle)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;

        return $this;
    }
}
