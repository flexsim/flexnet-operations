<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserAccountType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $account;

    /**
     * @var \DateTimeInterface
     */
    private $expiryDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType
     */
    private $roles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var \DateTimeInterface $expiryDate
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType $roles
     */
    public function __construct($account, \DateTimeInterface $expiryDate = null, \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType $roles = null)
    {
        $this->account = $account;
        $this->expiryDate = $expiryDate;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var \DateTimeInterface $expiryDate
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType $roles
     */
    public static function create($account, \DateTimeInterface $expiryDate = null, \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType $roles = null)
    {
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
     * @return \DateTimeInterface
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTimeInterface $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesAccountListType $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
