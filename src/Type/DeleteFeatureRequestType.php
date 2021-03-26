<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteFeatureRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteFeatureDataType
     */
    private $feature;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteFeatureDataType $feature
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteFeatureDataType $feature)
    {
        $this->feature = $feature;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteFeatureDataType $feature
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteFeatureDataType $feature)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteFeatureDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteFeatureDataType $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;
        return $this;
    }


}

