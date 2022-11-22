<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedFeatureDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array
     */
    protected $createdFeature;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array  $createdFeature
     */
    public function __construct($createdFeature = null)
    {
        $this->createdFeature = $createdFeature;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array  $createdFeature
     */
    public static function create($createdFeature = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array
     */
    public function getCreatedFeature()
    {
        return $this->createdFeature;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array  $createdFeature
     * @return $this
     */
    public function setCreatedFeature($createdFeature)
    {
        $this->createdFeature = $createdFeature;

        return $this;
    }
}
