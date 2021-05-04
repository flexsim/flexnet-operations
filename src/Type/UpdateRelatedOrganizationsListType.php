<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateRelatedOrganizationsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    private $relatedOrganization;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $relatedOrganization
     * @var string $opType
     */
    public function __construct($relatedOrganization, string $opType)
    {
        $this->relatedOrganization = $relatedOrganization;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $relatedOrganization
     * @var string $opType
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
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $relatedOrganization
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
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }
}
