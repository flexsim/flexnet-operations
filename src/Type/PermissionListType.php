<?php

namespace Flexsim\FlexnetOperations\Type;

class PermissionListType extends FlexnetType
{

    /**
     * @var string|array 
     */
    protected $permission;

    /**
     * Constructor
     *
     * @param string|array $permission
     */
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }

    /**
     * create a new instance of this class
     *
     * @param string|array $permission
     */
    public static function create(string $permission)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param string|array $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
        return $this;
    }
}
