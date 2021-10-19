<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateUniformSuiteRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType
     */
    protected $uniformSuite;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType
     */
    public function getUniformSuite()
    {
        return $this->uniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite
     * @return $this
     */
    public function setUniformSuite($uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
        return $this;
    }
}
