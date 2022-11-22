<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkOrganizationsDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $parentOrg;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    protected $subOrg;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $parentOrg
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $subOrg
     */
    public function __construct(OrganizationIdentifierType $parentOrg, OrganizationIdentifierType $subOrg)
    {
        $this->parentOrg = $parentOrg;
        $this->subOrg = $subOrg;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $parentOrg
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $subOrg
     */
    public static function create(OrganizationIdentifierType $parentOrg, OrganizationIdentifierType $subOrg)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getParentOrg()
    {
        return $this->parentOrg;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $parentOrg
     * @return $this
     */
    public function setParentOrg($parentOrg)
    {
        $this->parentOrg = $parentOrg;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getSubOrg()
    {
        return $this->subOrg;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType  $subOrg
     * @return $this
     */
    public function setSubOrg($subOrg)
    {
        $this->subOrg = $subOrg;

        return $this;
    }
}
