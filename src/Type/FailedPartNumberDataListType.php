<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedPartNumberDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType
     */
    private $failedPartNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array $failedPartNumber
     */
    public function __construct($failedPartNumber = null)
    {
        $this->failedPartNumber = $failedPartNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType|array $failedPartNumber
     */
    public static function create($failedPartNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType
     */
    public function getFailedPartNumber()
    {
        return $this->failedPartNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedPartNumberDataType $failedPartNumber
     * @return $this
     */
    public function setFailedPartNumber($failedPartNumber)
    {
        $this->failedPartNumber = $failedPartNumber;
        return $this;
    }


}

