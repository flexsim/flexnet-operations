<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateSubAccountsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $subAccount;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAccount
     * @var string $opType
     */
    public function __construct($subAccount, string $opType)
    {
        $this->subAccount = $subAccount;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAccount
     * @var string $opType
     */
    public static function create($subAccount, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getSubAccount()
    {
        return $this->subAccount;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAccount
     * @return $this
     */
    public function setSubAccount($subAccount)
    {
        $this->subAccount = $subAccount;
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
