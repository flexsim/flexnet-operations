<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUniformSuitesQueryResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteQueryDataType
     */
    protected $uniformSuite;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UniformSuiteQueryDataType|array $uniformSuite
     */
    public function __construct($uniformSuite = null)
    {
        $this->uniformSuite = $uniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UniformSuiteQueryDataType|array $uniformSuite
     */
    public static function create($uniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UniformSuiteQueryDataType
     */
    public function getUniformSuite()
    {
        return $this->uniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UniformSuiteQueryDataType $uniformSuite
     * @return $this
     */
    public function setUniformSuite($uniformSuite)
    {
        $this->uniformSuite = $uniformSuite;

        return $this;
    }
}
