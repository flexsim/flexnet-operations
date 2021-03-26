<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateFeatureBundleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType $featureBundle
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType $featureBundle, string $reason = null)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType $featureBundle
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType $featureBundle, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleDataType $featureBundle
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

