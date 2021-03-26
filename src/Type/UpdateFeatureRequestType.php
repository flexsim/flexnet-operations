<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateFeatureRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureDataType
     */
    private $feature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureDataType $feature
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateFeatureDataType $feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeatureDataType $feature
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateFeatureDataType $feature)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeatureDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateFeatureDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
        return $this;
    }


}

