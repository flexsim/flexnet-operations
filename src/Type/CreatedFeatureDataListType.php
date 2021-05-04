<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedFeatureDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array
     */
    private $createdFeature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array $createdFeature
     */
    public function __construct($createdFeature = null)
    {
        $this->createdFeature = $createdFeature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array $createdFeature
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
     * @param \Flexsim\FlexnetOperations\Type\CreatedFeatureDataType|array $createdFeature
     * @return $this
     */
    public function setCreatedFeature($createdFeature)
    {
        $this->createdFeature = $createdFeature;
        return $this;
    }
}
