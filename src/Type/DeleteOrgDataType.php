<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteOrgDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $organization;

    /**
     * @var bool
     */
    protected $deleteSubTree;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @var bool $deleteSubTree
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, bool $deleteSubTree = null)
    {
        $this->organization = $organization;
        $this->deleteSubTree = $deleteSubTree;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @var bool $deleteSubTree
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization, bool $deleteSubTree = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDeleteSubTree()
    {
        return $this->deleteSubTree;
    }

    /**
     * @param bool $deleteSubTree
     * @return $this
     */
    public function setDeleteSubTree($deleteSubTree)
    {
        $this->deleteSubTree = $deleteSubTree;
        return $this;
    }
}
