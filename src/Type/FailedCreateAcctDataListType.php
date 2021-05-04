<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateAcctDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateAcctDataType|array 
     */
    private $failedAcct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateAcctDataType|array $failedAcct
     */
    public function __construct($failedAcct = null)
    {
        $this->failedAcct = $failedAcct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateAcctDataType|array $failedAcct
     */
    public static function create($failedAcct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedCreateAcctDataType|array 
     */
    public function getFailedAcct()
    {
        return $this->failedAcct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedCreateAcctDataType|array $failedAcct
     * @return $this
     */
    public function setFailedAcct($failedAcct)
    {
        $this->failedAcct = $failedAcct;
        return $this;
    }
}
