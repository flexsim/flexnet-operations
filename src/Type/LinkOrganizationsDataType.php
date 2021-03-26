<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkOrganizationsDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $parentOrg;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $subOrg;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $parentOrg
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrg
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $parentOrg, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrg)
    {
        $this->parentOrg = $parentOrg;
        $this->subOrg = $subOrg;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $parentOrg
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrg
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $parentOrg, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrg)
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
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $parentOrg
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
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrg
     * @return $this
     */
    public function setSubOrg($subOrg)
    {
        $this->subOrg = $subOrg;
        return $this;
    }


}

