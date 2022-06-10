<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUniformSuiteRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType
     */
    protected $uniformSuite;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType
     */
    public function getUniformSuite()
    {
        return $this->uniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite
     * @return $this
     */
    public function setUniformSuite($uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;

        return $this;
    }
}
