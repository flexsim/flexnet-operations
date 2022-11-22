<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateOrganizationRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateOrgDataType
     */
    protected $orgData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateOrgDataType  $orgData
     */
    public function __construct(UpdateOrgDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\UpdateOrgDataType  $orgData
     */
    public static function create(UpdateOrgDataType $orgData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateOrgDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\UpdateOrgDataType  $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;

        return $this;
    }
}
