<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array
     */
    protected $role;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @param string $opType
     */
    public function __construct($role, string $opType)
    {
        $this->role = $role;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @param string $opType
     */
    public static function create($role, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }
}
