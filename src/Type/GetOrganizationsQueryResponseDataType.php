<?php

namespace Flexsim\FlexnetOperations\Type;

class GetOrganizationsQueryResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDetailDataType
     */
    protected $orgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDetailDataType|array $orgData
     */
    public function __construct($orgData = null)
    {
        $this->orgData = $orgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDetailDataType|array $orgData
     */
    public static function create($orgData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationDetailDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationDetailDataType $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;
        return $this;
    }
}
