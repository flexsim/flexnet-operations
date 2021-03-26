<?php

namespace Flexsim\FlexnetOperations\Type;

class UserOrganizationRolesListType
{

    /**
     * @var string
     */
    private $roleName;

    /**
     * Constructor
     *
     * @var string $roleName
     */
    public function __construct(string $roleName)
    {
        $this->roleName = $roleName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $roleName
     */
    public static function create(string $roleName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
        return $this;
    }


}

