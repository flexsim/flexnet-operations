<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedOrgDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedOrgDataType
     */
    private $failedOrganization;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedOrgDataType|array $failedOrganization
     */
    public function __construct($failedOrganization = null)
    {
        $this->failedOrganization = $failedOrganization;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedOrgDataType|array $failedOrganization
     */
    public static function create($failedOrganization = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedOrgDataType
     */
    public function getFailedOrganization()
    {
        return $this->failedOrganization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedOrgDataType $failedOrganization
     * @return $this
     */
    public function setFailedOrganization($failedOrganization)
    {
        $this->failedOrganization = $failedOrganization;
        return $this;
    }


}

