<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserAccountRolesListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array
     */
    protected $role;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     */
    public function __construct($role)
    {
        $this->role = $role;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     */
    public static function create($role)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
