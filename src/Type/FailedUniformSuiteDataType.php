<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUniformSuiteDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType
     */
    protected $uniformSuite;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite = null, string $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteDataType $uniformSuite = null, string $reason = null)
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
