<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUniformSuiteDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;
        return $this;
    }


}

