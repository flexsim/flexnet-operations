<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserAccountRolesDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $account;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType
     */
    private $roles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles)
    {
        $this->account = $account;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $account
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $account, \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles)
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }


}

