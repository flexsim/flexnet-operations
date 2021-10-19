<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelateAccountsRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RelateAccountsDataType
     */
    protected $acctData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData)
    {
        $this->acctData = $acctData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RelateAccountsDataType $acctData)
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
}
