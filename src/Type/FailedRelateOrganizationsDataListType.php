<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRelateOrganizationsDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array
     */
    protected $failedOrgData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array $failedOrgData
     */
    public function __construct($failedOrgData = null)
    {
        $this->failedOrgData = $failedOrgData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array $failedOrgData
     */
    public static function create($failedOrgData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array
     */
    public function getFailedOrgData()
    {
        return $this->failedOrgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedRelateOrganizationsDataType|array $failedOrgData
     * @return $this
     */
    public function setFailedOrgData($failedOrgData)
    {
        $this->failedOrgData = $failedOrgData;

        return $this;
    }
}
