<?php

namespace Flexsim\FlexnetOperations\Type;

class FeaturesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType
     */
    private $feature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
        return $this;
    }


}

