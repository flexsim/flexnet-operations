<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteFeatureBundleDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureBundleDataType
     */
    private $failedFeatureBundle;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureBundleDataType|array $failedFeatureBundle
     */
    public function __construct($failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureBundleDataType|array $failedFeatureBundle
     */
    public static function create($failedFeatureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureBundleDataType
     */
    public function getFailedFeatureBundle()
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteFeatureBundleDataType $failedFeatureBundle
     * @return $this
     */
    public function setFailedFeatureBundle($failedFeatureBundle)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
        return $this;
    }


}

