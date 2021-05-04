<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSetLicenseOnholdFulfillmentListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType|array 
     */
    private $failedFmtData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData
     */
    public function __construct($failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData
     */
    public static function create($failedFmtData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType|array 
     */
    public function getFailedFmtData()
    {
        return $this->failedFmtData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType|array $failedFmtData
     * @return $this
     */
    public function setFailedFmtData($failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
        return $this;
    }
}
