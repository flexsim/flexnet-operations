<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkAcctDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkAcctDataType|array
     */
    protected $failedAcctData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedLinkAcctDataType|array  $failedAcctData
     */
    public function __construct($failedAcctData = null)
    {
        $this->failedAcctData = $failedAcctData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedLinkAcctDataType|array  $failedAcctData
     */
    public static function create($failedAcctData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedLinkAcctDataType|array
     */
    public function getFailedAcctData()
    {
        return $this->failedAcctData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedLinkAcctDataType|array  $failedAcctData
     * @return $this
     */
    public function setFailedAcctData($failedAcctData)
    {
        $this->failedAcctData = $failedAcctData;

        return $this;
    }
}
