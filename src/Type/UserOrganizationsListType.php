<?php

namespace Flexsim\FlexnetOperations\Type;

class UserOrganizationsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationType
     */
    private $orgRoles;

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
     * @return \Flexsim\FlexnetOperations\Type\UserOrganizationType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserOrganizationType $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }


}

