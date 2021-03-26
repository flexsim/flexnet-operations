<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingBulkEntsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType
     */
    private $failedBulkEnt;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType $failedBulkEnt
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType $failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType $failedBulkEnt
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType $failedBulkEnt)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType
     */
    public function getFailedBulkEnt()
    {
        return $this->failedBulkEnt;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType $failedBulkEnt
     * @return $this
     */
    public function setFailedBulkEnt($failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
        return $this;
    }


}

