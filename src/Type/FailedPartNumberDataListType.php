<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedPartNumberDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array
     */
    protected $failedPartNumber;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array $failedPartNumber
     */
    public function __construct($failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array $failedPartNumber
     */
    public static function create($failedPartNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array
     */
    public function getFailedPartNumber()
    {
        return $this->failedPartNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array $failedPartNumber
     * @return $this
     */
    public function setFailedPartNumber($failedPartNumber)
    {
        $this->failedPartNumber = $failedPartNumber;

        return $this;
    }
}
