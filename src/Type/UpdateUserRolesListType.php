<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array
     */
    private $role;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @var string $opType
     */
    public function __construct($role, string $opType)
    {
        $this->role = $role;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RoleIdentifierType|array $role
     * @var string $opType
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
