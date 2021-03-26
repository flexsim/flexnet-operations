<?php

namespace Flexsim\FlexnetOperations\Type;

class PermissionListType
{

    /**
     * @var string
     */
    private $permission;

    /**
     * Constructor
     *
     * @var string $permission
     */
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }

    /**
     * create a new instance of this class
     *
     * @var string $permission
     */
    public static function create(string $permission)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * @param string $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
        return $this;
    }


}

