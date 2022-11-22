<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserOrganizationType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $organization;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationRolesListType
     */
    protected $roles;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $organization
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserOrganizationRolesListType  $roles
     */
    public function __construct(OrganizationIdentifierType $organization, CreateUserOrganizationRolesListType $roles = null)
    {
        $this->organization = $organization;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $organization
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserOrganizationRolesListType  $roles
     */
    public static function create(OrganizationIdentifierType $organization, CreateUserOrganizationRolesListType $roles = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserOrganizationRolesListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreateUserOrganizationRolesListType  $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
}
