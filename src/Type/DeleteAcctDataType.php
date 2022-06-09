<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteAcctDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $account;

    /**
     * @var bool
     */
    protected $deleteSubTree;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @param bool $deleteSubTree
     */
    public function __construct(
        $account,
        bool $deleteSubTree = null
    ) {
        $this->account = $account;
        $this->deleteSubTree = $deleteSubTree;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @param bool $deleteSubTree
     */
    public static function create(
        $account,
        bool $deleteSubTree = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDeleteSubTree()
    {
        return $this->deleteSubTree;
    }

    /**
     * @param bool $deleteSubTree
     * @return $this
     */
    public function setDeleteSubTree($deleteSubTree)
    {
        $this->deleteSubTree = $deleteSubTree;

        return $this;
    }
}
