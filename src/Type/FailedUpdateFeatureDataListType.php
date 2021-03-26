<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateFeatureDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureDataType
     */
    private $failedFeature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureDataType|array $failedFeature
     */
    public function __construct($failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureDataType|array $failedFeature
     */
    public static function create($failedFeature = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureDataType
     */
    public function getFailedFeature()
    {
        return $this->failedFeature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureDataType $failedFeature
     * @return $this
     */
    public function setFailedFeature($failedFeature)
    {
        $this->failedFeature = $failedFeature;
        return $this;
    }


}

