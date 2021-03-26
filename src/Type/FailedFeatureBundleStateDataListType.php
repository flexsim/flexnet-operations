<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureBundleStateDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedFeatureBundleStateDataType
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedFeatureBundleStateDataType|array $failedFeatureBundle
     */
    public function __construct($failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedFeatureBundleStateDataType|array $failedFeatureBundle
     */
    public static function create($failedFeatureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedFeatureBundleStateDataType
     */
    public function getFailedFeatureBundle()
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedFeatureBundleStateDataType $failedFeatureBundle
     * @return $this
     */
    public function setFailedFeatureBundle($failedFeatureBundle)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
        return $this;
    }


}

