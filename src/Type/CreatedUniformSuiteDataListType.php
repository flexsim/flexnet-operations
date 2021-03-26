<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedUniformSuiteDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType
     */
    private $createdUniformSuite;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array $createdUniformSuite
     */
    public function __construct($createdUniformSuite = null)
    {
        $this->createdUniformSuite = $createdUniformSuite;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType|array $createdUniformSuite
     */
    public static function create($createdUniformSuite = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType
     */
    public function getCreatedUniformSuite()
    {
        return $this->createdUniformSuite;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedUniformSuiteDataType $createdUniformSuite
     * @return $this
     */
    public function setCreatedUniformSuite($createdUniformSuite)
    {
        $this->createdUniformSuite = $createdUniformSuite;
        return $this;
    }


}

