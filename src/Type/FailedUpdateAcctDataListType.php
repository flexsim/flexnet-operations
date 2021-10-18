<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateAcctDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateAcctDataType|array 
     */
    protected $failedAccount;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateAcctDataType|array $failedAccount
     */
    public function __construct($failedAccount = null)
    {
        $this->failedAccount = $failedAccount;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateAcctDataType|array $failedAccount
     */
    public static function create($failedAccount = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateAcctDataType|array 
     */
    public function getFailedAccount()
    {
        return $this->failedAccount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateAcctDataType|array $failedAccount
     * @return $this
     */
    public function setFailedAccount($failedAccount)
    {
        $this->failedAccount = $failedAccount;
        return $this;
    }
}
