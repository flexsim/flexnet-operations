<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureBundleStateDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleStateDataType $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

