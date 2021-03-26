<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateOrgRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType
     */
    private $organization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization)
    {
        $this->organization = $organization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationDataType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }


}

