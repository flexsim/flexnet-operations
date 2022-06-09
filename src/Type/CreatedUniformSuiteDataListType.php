<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedUniformSuiteDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array
     */
    protected $createdUniformSuite;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array $createdUniformSuite
     */
    public function __construct($createdUniformSuite = null)
    {
        $this->createdUniformSuite = $createdUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array $createdUniformSuite
     */
    public static function create($createdUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array
     */
    public function getCreatedUniformSuite()
    {
        return $this->createdUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array $createdUniformSuite
     * @return $this
     */
    public function setCreatedUniformSuite($createdUniformSuite)
    {
        $this->createdUniformSuite = $createdUniformSuite;

        return $this;
    }
}
