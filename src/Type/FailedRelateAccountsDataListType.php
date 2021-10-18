<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRelateAccountsDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateAccountsDataType|array 
     */
    protected $failedAcctData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateAccountsDataType|array $failedAcctData
     */
    public function __construct($failedAcctData = null)
    {
        $this->failedAcctData = $failedAcctData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateAccountsDataType|array $failedAcctData
     */
    public static function create($failedAcctData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRelateAccountsDataType|array 
     */
    public function getFailedAcctData()
    {
        return $this->failedAcctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRelateAccountsDataType|array $failedAcctData
     * @return $this
     */
    public function setFailedAcctData($failedAcctData)
    {
        $this->failedAcctData = $failedAcctData;
        return $this;
    }
}
