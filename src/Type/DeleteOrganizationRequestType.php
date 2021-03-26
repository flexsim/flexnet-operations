<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteOrganizationRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeleteOrgDataType
     */
    private $orgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteOrgDataType $orgData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeleteOrgDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeleteOrgDataType $orgData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeleteOrgDataType $orgData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeleteOrgDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeleteOrgDataType $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;
        return $this;
    }


}

