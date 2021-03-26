<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserOrganizationRolesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType
     */
    private $role;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType $role
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RoleIdentifierType $role)
    {
        $this->role = $role;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType $role
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RoleIdentifierType $role)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RoleIdentifierType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }


}

