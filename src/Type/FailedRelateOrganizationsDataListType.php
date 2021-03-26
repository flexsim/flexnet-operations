<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRelateOrganizationsDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType
     */
    private $failedOrgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array $failedOrgData
     */
    public function __construct($failedOrgData = null)
    {
        $this->failedOrgData = $failedOrgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array $failedOrgData
     */
    public static function create($failedOrgData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType
     */
    public function getFailedOrgData()
    {
        return $this->failedOrgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType $failedOrgData
     * @return $this
     */
    public function setFailedOrgData($failedOrgData)
    {
        $this->failedOrgData = $failedOrgData;
        return $this;
    }


}

