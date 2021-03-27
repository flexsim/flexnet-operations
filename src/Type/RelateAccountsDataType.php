<?php

namespace Flexsim\FlexnetOperations\Type;

class RelateAccountsDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $accountToRelate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $relatedAccount;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $accountToRelate
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $relatedAccount
     */
    public function __construct($accountToRelate,  $relatedAccount)
    {
        $this->accountToRelate = $accountToRelate;
        $this->relatedAccount = $relatedAccount;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $accountToRelate
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $relatedAccount
     */
    public static function create($accountToRelate,  $relatedAccount)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccountToRelate()
    {
        return $this->accountToRelate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $accountToRelate
     * @return $this
     */
    public function setAccountToRelate($accountToRelate)
    {
        $this->accountToRelate = $accountToRelate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getRelatedAccount()
    {
        return $this->relatedAccount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $relatedAccount
     * @return $this
     */
    public function setRelatedAccount($relatedAccount)
    {
        $this->relatedAccount = $relatedAccount;
        return $this;
    }
}
