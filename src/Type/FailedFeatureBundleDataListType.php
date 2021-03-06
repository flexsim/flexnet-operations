<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureBundleDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedFeatureBundleDataType|array
     */
    protected $failedFeatureBundle;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedFeatureBundleDataType|array $failedFeatureBundle
     */
    public function __construct($failedFeatureBundle = null)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedFeatureBundleDataType|array $failedFeatureBundle
     */
    public static function create($failedFeatureBundle = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedFeatureBundleDataType|array
     */
    public function getFailedFeatureBundle()
    {
        return $this->failedFeatureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedFeatureBundleDataType|array $failedFeatureBundle
     * @return $this
     */
    public function setFailedFeatureBundle($failedFeatureBundle)
    {
        $this->failedFeatureBundle = $failedFeatureBundle;

        return $this;
    }
}
