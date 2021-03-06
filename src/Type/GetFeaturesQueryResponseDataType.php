<?php

namespace Flexsim\FlexnetOperations\Type;

class GetFeaturesQueryResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureQueryDataType
     */
    protected $feature;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureQueryDataType|array $feature
     */
    public function __construct($feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureQueryDataType|array $feature
     */
    public static function create($feature = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureQueryDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureQueryDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }
}
