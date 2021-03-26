<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedOrgDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedOrgDataType
     */
    private $createdOrganization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array $createdOrganization
     */
    public function __construct($createdOrganization = null)
    {
        $this->createdOrganization = $createdOrganization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array $createdOrganization
     */
    public static function create($createdOrganization = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedOrgDataType
     */
    public function getCreatedOrganization()
    {
        return $this->createdOrganization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedOrgDataType $createdOrganization
     * @return $this
     */
    public function setCreatedOrganization($createdOrganization)
    {
        $this->createdOrganization = $createdOrganization;
        return $this;
    }


}

