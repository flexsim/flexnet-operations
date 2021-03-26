<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkOrganizationsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType
     */
    private $orgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;
        return $this;
    }


}

