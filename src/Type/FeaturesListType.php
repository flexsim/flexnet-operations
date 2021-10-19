<?php

namespace Flexsim\FlexnetOperations\Type;

class FeaturesListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array 
     */
    protected $feature;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     */
    public function __construct($feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     */
    public static function create($feature)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array 
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
        return $this;
    }
}
