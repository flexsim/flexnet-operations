<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrustedRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationDataType
     */
    protected $inputData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationDataType $inputData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ActivationDataType $inputData)
    {
        $this->inputData = $inputData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationDataType $inputData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ActivationDataType $inputData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivationDataType
     */
    public function getInputData()
    {
        return $this->inputData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivationDataType $inputData
     * @return $this
     */
    public function setInputData($inputData)
    {
        $this->inputData = $inputData;

        return $this;
    }
}
