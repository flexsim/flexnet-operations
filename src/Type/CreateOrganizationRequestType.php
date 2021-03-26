<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateOrganizationRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationBasicDataType
     */
    private $organization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationBasicDataType $organization
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationBasicDataType $organization)
    {
        $this->organization = $organization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationBasicDataType $organization
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationBasicDataType $organization)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationBasicDataType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationBasicDataType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }


}
