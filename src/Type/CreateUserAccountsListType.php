<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserAccountsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountType
     */
    private $acctRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountType $acctRoles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateUserAccountType $acctRoles)
    {
        $this->acctRoles = $acctRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountType $acctRoles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateUserAccountType $acctRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserAccountType
     */
    public function getAcctRoles()
    {
        return $this->acctRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountType $acctRoles
     * @return $this
     */
    public function setAcctRoles($acctRoles)
    {
        $this->acctRoles = $acctRoles;
        return $this;
    }


}

