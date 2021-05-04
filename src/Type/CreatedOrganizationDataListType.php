<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedOrganizationDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    private $organization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $organization
     */
    public function __construct($organization = null)
    {
        $this->organization = $organization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $organization
     */
    public static function create($organization = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }
}
