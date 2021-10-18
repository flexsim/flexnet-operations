<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserOrganizationsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType|array
     */
    protected $orgRoles;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType|array $orgRoles
     * @var string $opType
     */
    public function __construct($orgRoles, string $opType)
    {
        $this->orgRoles = $orgRoles;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType|array $orgRoles
     * @var string $opType
     */
    public static function create($orgRoles, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType|array
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType|array $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
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
