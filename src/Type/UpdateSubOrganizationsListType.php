<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateSubOrganizationsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $subOrganization;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrganization
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrganization, string $opType)
    {
        $this->subOrganization = $subOrganization;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrganization
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrganization, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getSubOrganization()
    {
        return $this->subOrganization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $subOrganization
     * @return $this
     */
    public function setSubOrganization($subOrganization)
    {
        $this->subOrganization = $subOrganization;
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

