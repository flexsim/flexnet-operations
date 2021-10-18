<?php

namespace Flexsim\FlexnetOperations\Type;

class UserOrganizationsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationType|array 
     */
    protected $orgRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationType|array $orgRoles
     */
    public function __construct($orgRoles = null)
    {
        $this->orgRoles = $orgRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationType|array $orgRoles
     */
    public static function create($orgRoles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserOrganizationType|array 
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserOrganizationType|array $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }
}
