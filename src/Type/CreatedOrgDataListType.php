<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedOrgDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array
     */
    protected $createdOrganization;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array  $createdOrganization
     */
    public function __construct($createdOrganization = null)
    {
        $this->createdOrganization = $createdOrganization;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array  $createdOrganization
     */
    public static function create($createdOrganization = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array
     */
    public function getCreatedOrganization()
    {
        return $this->createdOrganization;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CreatedOrgDataType|array  $createdOrganization
     * @return $this
     */
    public function setCreatedOrganization($createdOrganization)
    {
        $this->createdOrganization = $createdOrganization;

        return $this;
    }
}
