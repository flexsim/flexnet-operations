<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateAcctDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountDataType
     */
    private $account;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountDataType $account
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountDataType $account = null, string $reason = null)
    {
        $this->account = $account;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountDataType $account
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountDataType $account = null, string $reason = null)
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
     * @param \Flexsim\FlexnetOperations\Type\AccountDataType $account
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

