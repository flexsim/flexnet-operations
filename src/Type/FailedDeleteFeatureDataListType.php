<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteFeatureDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureDataType|array
     */
    protected $failedFeature;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureDataType|array  $failedFeature
     */
    public function __construct($failedFeature = null)
    {
        $this->failedFeature = $failedFeature;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureDataType|array  $failedFeature
     */
    public static function create($failedFeature = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureDataType|array
     */
    public function getFailedFeature()
    {
        return $this->failedFeature;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureDataType|array  $failedFeature
     * @return $this
     */
    public function setFailedFeature($failedFeature)
    {
        $this->failedFeature = $failedFeature;

        return $this;
    }
}
