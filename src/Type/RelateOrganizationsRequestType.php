<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelateOrganizationsRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType
     */
    private $orgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType $orgData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType $orgData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType $orgData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;
        return $this;
    }


}

