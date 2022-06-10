<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRelateAccountsDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RelateAccountsDataType
     */
    protected $acctData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData = null, string $reason = null)
    {
        $this->acctData = $acctData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RelateAccountsDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
