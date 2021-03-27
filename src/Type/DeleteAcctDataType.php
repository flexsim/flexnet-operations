<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteAcctDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $account;

    /**
     * @var bool
     */
    private $deleteSubTree;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var bool $deleteSubTree
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, bool $deleteSubTree = null)
    {
        $this->account = $account;
        $this->deleteSubTree = $deleteSubTree;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var bool $deleteSubTree
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, bool $deleteSubTree = null)
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

