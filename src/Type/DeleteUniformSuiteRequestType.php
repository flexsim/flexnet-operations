<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUniformSuiteRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType
     */
    protected $uniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType $uniformSuite
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType $uniformSuite
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType $uniformSuite)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType
     */
    public function getUniformSuite()
    {
        return $this->uniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteDataType $uniformSuite
     * @return $this
     */
    public function setUniformSuite($uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
        return $this;
    }
}
