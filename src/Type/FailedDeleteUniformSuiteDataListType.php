<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteUniformSuiteDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array
     */
    protected $failedUniformSuite;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array  $failedUniformSuite
     */
    public function __construct($failedUniformSuite = null)
    {
        $this->failedUniformSuite = $failedUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array  $failedUniformSuite
     */
    public static function create($failedUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array
     */
    public function getFailedUniformSuite()
    {
        return $this->failedUniformSuite;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedDeleteUniformSuiteDataType|array  $failedUniformSuite
     * @return $this
     */
    public function setFailedUniformSuite($failedUniformSuite)
    {
        $this->failedUniformSuite = $failedUniformSuite;

        return $this;
    }
}
