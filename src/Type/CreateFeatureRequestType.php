<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateFeatureRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureDataType
     */
    protected $feature;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataType $feature
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureDataType $feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureDataType $feature
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureDataType $feature)
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
}
