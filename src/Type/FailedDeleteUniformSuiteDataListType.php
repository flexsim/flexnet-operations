<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteUniformSuiteDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;
        return $this;
    }


}

