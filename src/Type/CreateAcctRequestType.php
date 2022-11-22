<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateAcctRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountDataType
     */
    protected $account;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountDataType  $account
     * @param  string  $opType
     */
    public function __construct(AccountDataType $account, string $opType = null)
    {
        $this->account = $account;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountDataType  $account
     * @param  string  $opType
     */
    public static function create(AccountDataType $account, string $opType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountDataType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AccountDataType  $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param  string  $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
