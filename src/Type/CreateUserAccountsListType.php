<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserAccountsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountType|array
     */
    protected $acctRoles;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountType|array $acctRoles
     */
    public function __construct($acctRoles)
    {
        $this->acctRoles = $acctRoles;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountType|array $acctRoles
     */
    public static function create($acctRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserAccountType|array
     */
    public function getAcctRoles()
    {
        return $this->acctRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountType|array $acctRoles
     * @return $this
     */
    public function setAcctRoles($acctRoles)
    {
        $this->acctRoles = $acctRoles;

        return $this;
    }
}
