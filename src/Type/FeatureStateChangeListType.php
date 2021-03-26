<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureStateChangeListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateChangeDataType
     */
    private $feature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateChangeDataType|array $feature
     */
    public function __construct($feature = null)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateChangeDataType|array $feature
     */
    public static function create($feature = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureStateChangeDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureStateChangeDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
        return $this;
    }


}
