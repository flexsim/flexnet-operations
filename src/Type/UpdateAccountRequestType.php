<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateAccountRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType
     */
    private $acctData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData)
    {
        $this->acctData = $acctData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateAcctDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateAcctDataType $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;
        return $this;
    }


}

