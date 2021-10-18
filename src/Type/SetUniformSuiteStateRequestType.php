<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetUniformSuiteStateRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType
     */
    protected $suite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite)
    {
        $this->suite = $suite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType
     */
    public function getSuite()
    {
        return $this->suite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite
     * @return $this
     */
    public function setSuite($suite)
    {
        $this->suite = $suite;
        return $this;
    }
}
