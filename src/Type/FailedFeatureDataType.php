<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedFeatureDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataType
     */
    protected $feature;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataType $feature
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureDataType $feature = null, string $reason = null)
    {
        $this->feature = $feature;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataType $feature
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureDataType $feature = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataType $feature
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
