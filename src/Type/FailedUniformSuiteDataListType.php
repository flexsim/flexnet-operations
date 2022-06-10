<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUniformSuiteDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array
     */
    protected $failedUniformSuite;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUniformSuiteDataType|array $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;

        return $this;
    }
}
