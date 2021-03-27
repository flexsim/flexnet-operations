<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedAccountDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $account;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|array $account
     */
    public function __construct($account = null)
    {
        $this->account = $account;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType|array $account
     */
    public static function create($account = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;
        return $this;
    }


}

