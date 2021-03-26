<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkOrgDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkOrgDataType
     */
    private $failedOrgData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkOrgDataType|array $failedOrgData
     */
    public function __construct($failedOrgData = null)
    {
        $this->failedOrgData = $failedOrgData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedLinkOrgDataType|array $failedOrgData
     */
    public static function create($failedOrgData = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedLinkOrgDataType
     */
    public function getFailedOrgData()
    {
        return $this->failedOrgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedLinkOrgDataType $failedOrgData
     * @return $this
     */
    public function setFailedOrgData($failedOrgData)
    {
        $this->failedOrgData = $failedOrgData;
        return $this;
    }


}

