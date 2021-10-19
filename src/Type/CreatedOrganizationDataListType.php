<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedOrganizationDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array
     */
    protected $organization;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $organization
     */
    public function __construct($organization = null)
    {
        $this->organization = $organization;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|array $organization
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
