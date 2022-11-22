<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LinkOrganizationsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType
     */
    protected $orgData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType  $orgData
     */
    public function __construct(LinkOrganizationsDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType  $orgData
     */
    public static function create(LinkOrganizationsDataType $orgData)
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
     * @param  \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType  $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;

        return $this;
    }
}
