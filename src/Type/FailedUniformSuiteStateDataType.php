<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUniformSuiteStateDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType
     */
    protected $suite;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite, string $reason)
    {
        $this->suite = $suite;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UniformSuiteStateDataType $suite, string $reason)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
