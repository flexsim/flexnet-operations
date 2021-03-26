<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUniformSuiteDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType
     */
    private $uniformSuite;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite, string $reason = null)
    {
        $this->uniformSuite = $uniformSuite;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteDataType $uniformSuite, string $reason = null)
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

