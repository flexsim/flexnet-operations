<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateRelatedOrganizationsListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    protected $relatedOrganization;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $relatedOrganization
     * @param  string  $opType
     */
    public function __construct($relatedOrganization, string $opType)
    {
        $this->relatedOrganization = $relatedOrganization;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $relatedOrganization
     * @param  string  $opType
     */
    public static function create($relatedOrganization, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    public function getRelatedOrganization()
    {
        return $this->relatedOrganization;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array  $relatedOrganization
     * @return $this
     */
    public function setRelatedOrganization($relatedOrganization)
    {
        $this->relatedOrganization = $relatedOrganization;

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
