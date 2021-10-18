<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetFeatureStateRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateDataType
     */
    protected $feature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureStateDataType $feature)
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
}
