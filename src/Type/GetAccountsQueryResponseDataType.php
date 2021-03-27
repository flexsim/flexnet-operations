<?php

namespace Flexsim\FlexnetOperations\Type;

class GetAccountsQueryResponseDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountDetailDataType
     */
    private $acctData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountDetailDataType|array $acctData
     */
    public function __construct($acctData = null)
    {
        $this->acctData = $acctData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountDetailDataType|array $acctData
     */
    public static function create($acctData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountDetailDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountDetailDataType $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;
        return $this;
    }


}

