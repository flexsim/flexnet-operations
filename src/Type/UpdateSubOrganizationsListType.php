<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateSubOrganizationsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    protected $subOrganization;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $subOrganization
     * @param  string  $opType
     */
    public function __construct($subOrganization, string $opType)
    {
        $this->subOrganization = $subOrganization;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $subOrganization
     * @param  string  $opType
     */
    public static function create($subOrganization, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    public function getSubOrganization()
    {
        return $this->subOrganization;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $subOrganization
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
     * @param  string  $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
