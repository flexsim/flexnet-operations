<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingBulkEntsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType|array 
     */
    protected $failedBulkEnt;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt
     */
    public function __construct($failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt
     */
    public static function create($failedBulkEnt)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType|array 
     */
    public function getFailedBulkEnt()
    {
        return $this->failedBulkEnt;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedMatchingBulkEntDataType|array $failedBulkEnt
     * @return $this
     */
    public function setFailedBulkEnt($failedBulkEnt)
    {
        $this->failedBulkEnt = $failedBulkEnt;
        return $this;
    }
}
