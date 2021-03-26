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
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization, string $opType = null)
    {
        $this->organization = $organization;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization, string $opType = null)
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
