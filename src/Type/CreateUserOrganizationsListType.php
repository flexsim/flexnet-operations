<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserOrganizationsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType
     */
    private $orgRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType $orgRoles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateUserOrganizationType $orgRoles)
    {
        $this->orgRoles = $orgRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType $orgRoles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateUserOrganizationType $orgRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }


}

