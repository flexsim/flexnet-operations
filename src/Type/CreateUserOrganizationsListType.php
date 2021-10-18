<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserOrganizationsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType|array
     */
    protected $orgRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType|array $orgRoles
     */
    public function __construct($orgRoles)
    {
        $this->orgRoles = $orgRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType|array $orgRoles
     */
    public static function create($orgRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType|array
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserOrganizationType|array $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }
}
