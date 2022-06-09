<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateRelatedAccountsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array
     */
    protected $relatedAccount;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array $relatedAccount
     * @param string $opType
     */
    public function __construct($relatedAccount, string $opType)
    {
        $this->relatedAccount = $relatedAccount;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array $relatedAccount
     * @param string $opType
     */
    public static function create($relatedAccount, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array
     */
    public function getRelatedAccount()
    {
        return $this->relatedAccount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType|array $relatedAccount
     * @return $this
     */
    public function setRelatedAccount($relatedAccount)
    {
        $this->relatedAccount = $relatedAccount;

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
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
