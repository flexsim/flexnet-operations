<?php

namespace Flexsim\FlexnetOperations\Type;

class RelateOrganizationsDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $organizationToRelate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    private $relatedOrganization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationToRelate
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $relatedOrganization
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationToRelate, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $relatedOrganization)
    {
        $this->organizationToRelate = $organizationToRelate;
        $this->relatedOrganization = $relatedOrganization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationToRelate
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $relatedOrganization
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationToRelate, \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $relatedOrganization)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getOrganizationToRelate()
    {
        return $this->organizationToRelate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $organizationToRelate
     * @return $this
     */
    public function setOrganizationToRelate($organizationToRelate)
    {
        $this->organizationToRelate = $organizationToRelate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType
     */
    public function getRelatedOrganization()
    {
        return $this->relatedOrganization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType $relatedOrganization
     * @return $this
     */
    public function setRelatedOrganization($relatedOrganization)
    {
        $this->relatedOrganization = $relatedOrganization;
        return $this;
    }


}

