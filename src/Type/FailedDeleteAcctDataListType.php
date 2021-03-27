<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteAcctDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteAcctDataType
     */
    private $failedAcct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteAcctDataType|array $failedAcct
     */
    public function __construct($failedAcct = null)
    {
        $this->failedAcct = $failedAcct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteAcctDataType|array $failedAcct
     */
    public static function create($failedAcct = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteAcctDataType
     */
    public function getFailedAcct()
    {
        return $this->failedAcct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteAcctDataType $failedAcct
     * @return $this
     */
    public function setFailedAcct($failedAcct)
    {
        $this->failedAcct = $failedAcct;
        return $this;
    }


}
