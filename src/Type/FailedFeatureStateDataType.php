<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateDataType
     */
    protected $feature;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature, string $reason)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureStateDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

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
