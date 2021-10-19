<?php

namespace Flexsim\FlexnetOperations\Type;

class UserAccountsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountType|array 
     */
    protected $acctRoles;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UserAccountType|array $acctRoles
     */
    public function __construct($acctRoles = null)
    {
        $this->acctRoles = $acctRoles;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UserAccountType|array $acctRoles
     */
    public static function create($acctRoles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountType|array 
     */
    public function getAcctRoles()
    {
        return $this->acctRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountType|array $acctRoles
     * @return $this
     */
    public function setAcctRoles($acctRoles)
    {
        $this->acctRoles = $acctRoles;
        return $this;
    }
}
