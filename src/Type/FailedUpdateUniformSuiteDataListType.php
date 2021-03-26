<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateUniformSuiteDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUniformSuiteDataType
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUniformSuiteDataType|array $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateUniformSuiteDataType|array $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateUniformSuiteDataType
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateUniformSuiteDataType $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;
        return $this;
    }


}

