<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelateOrganizationsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType
     */
    protected $orgData;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
     */
    public function __construct(RelateOrganizationsDataType $orgData)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
     */
    public static function create(RelateOrganizationsDataType $orgData)
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
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;

        return $this;
    }
}
