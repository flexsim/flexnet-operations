<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkAccountsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkAccountsDataType
     */
    private $acctData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkAccountsDataType $acctData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkAccountsDataType $acctData)
    {
        $this->acctData = $acctData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkAccountsDataType $acctData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkAccountsDataType $acctData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkAccountsDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkAccountsDataType $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;
        return $this;
    }


}

