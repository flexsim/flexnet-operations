<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesOrganizationDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $organization;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType
     */
    protected $roles;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles)
    {
        $this->organization = $organization;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, \Flexsim\FlexnetOperations\Type\UpdateUserRolesListType $roles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

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
