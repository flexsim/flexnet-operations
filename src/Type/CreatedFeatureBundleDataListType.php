<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedFeatureBundleDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CorrelationDataType
     */
    private $createdFeatureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CorrelationDataType|array $createdFeatureBundle
     */
    public function __construct($createdFeatureBundle = null)
    {
        $this->createdFeatureBundle = $createdFeatureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CorrelationDataType|array $createdFeatureBundle
     */
    public static function create($createdFeatureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CorrelationDataType
     */
    public function getCreatedFeatureBundle()
    {
        return $this->createdFeatureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CorrelationDataType $createdFeatureBundle
     * @return $this
     */
    public function setCreatedFeatureBundle($createdFeatureBundle)
    {
        $this->createdFeatureBundle = $createdFeatureBundle;
        return $this;
    }


}

