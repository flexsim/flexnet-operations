<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteAccountRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteAcctDataType
     */
    protected $acctData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeleteAcctDataType  $acctData
     */
    public function __construct(DeleteAcctDataType $acctData)
    {
        $this->acctData = $acctData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\DeleteAcctDataType  $acctData
     */
    public static function create(DeleteAcctDataType $acctData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteAcctDataType
     */
    public function getAcctData()
    {
        return $this->acctData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\DeleteAcctDataType  $acctData
     * @return $this
     */
    public function setAcctData($acctData)
    {
        $this->acctData = $acctData;

        return $this;
    }
}
