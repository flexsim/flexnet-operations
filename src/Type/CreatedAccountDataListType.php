<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedAccountDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array
     */
    protected $account;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array  $account
     */
    public function __construct($account = null)
    {
        $this->account = $account;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array  $account
     */
    public static function create($account = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array  $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }
}
