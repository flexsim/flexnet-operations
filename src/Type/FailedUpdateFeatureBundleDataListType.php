<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateFeatureBundleDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureBundleDataType
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureBundleDataType|array $failedFeatureBundle
     */
    public function __construct($failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureBundleDataType|array $failedFeatureBundle
     */
    public static function create($failedFeatureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureBundleDataType
     */
    public function getFailedFeatureBundle()
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateFeatureBundleDataType $failedFeatureBundle
     * @return $this
     */
    public function setFailedFeatureBundle($failedFeatureBundle)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
        return $this;
    }


}

