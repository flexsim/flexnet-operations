<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserOrganizationsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType
     */
    private $orgRoles;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType $orgRoles
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType $orgRoles, string $opType)
    {
        $this->orgRoles = $orgRoles;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType $orgRoles
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType $orgRoles, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationType $orgRoles
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

