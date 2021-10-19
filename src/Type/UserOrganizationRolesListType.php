<?php

namespace Flexsim\FlexnetOperations\Type;

class UserOrganizationRolesListType extends FlexnetType
{

    /**
     * @var string|array
     */
    protected $roleName;

    /**
     * Constructor
     *
     * @param string|array $roleName
     */
    public function __construct($roleName)
    {
        $this->roleName = $roleName;
    }

    /**
     * create a new instance of this class
     *
     * @param string|array $roleName
     */
    public static function create($roleName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param string|array $roleName
     * @return $this
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
        return $this;
    }
}
