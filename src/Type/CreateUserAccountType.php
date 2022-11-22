<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserAccountType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    protected $account;

    /**
     * @var \DateTimeInterface
     */
    protected $expiryDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountRolesListType
     */
    protected $roles;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType  $account
     * @param  \DateTimeInterface  $expiryDate
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserAccountRolesListType  $roles
     */
    public function __construct(
        $account,
        \DateTimeInterface $expiryDate = null,
        CreateUserAccountRolesListType $roles = null
    ) {
        $this->account = $account;
        $this->expiryDate = $expiryDate;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType  $account
     * @param  \DateTimeInterface  $expiryDate
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserAccountRolesListType  $roles
     */
    public static function create(
        $account,
        \DateTimeInterface $expiryDate = null,
        CreateUserAccountRolesListType $roles = null
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
     * @param  \Flexsim\FlexnetOperations\Type\AccountIdentifierTypeUser|\Flexsim\FlexnetOperations\Type\AccountIdentifierType  $account
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
     * @param  \DateTimeInterface  $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserAccountRolesListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserAccountRolesListType  $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
}
