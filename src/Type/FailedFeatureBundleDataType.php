<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureBundleDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType
     */
    protected $featureBundle;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType $featureBundle
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        $this->featureBundle = $featureBundle;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType $featureBundle
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType $featureBundle, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateFeatureBundleDataType $featureBundle
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
