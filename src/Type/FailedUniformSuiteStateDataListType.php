<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUniformSuiteStateDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteStateDataType
     */
    private $failedUniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteStateDataType|array $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteStateDataType|array $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUniformSuiteStateDataType
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUniformSuiteStateDataType $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;
        return $this;
    }


}

