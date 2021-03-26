<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    private $orgRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles)
    {
        $this->user = $user;
        $this->orgRoles = $orgRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }


}

