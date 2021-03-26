<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSetLicenseOnholdFulfillmentListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType
     */
    private $failedFmtData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType $failedFmtData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType $failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType $failedFmtData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType $failedFmtData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType
     */
    public function getFailedFmtData()
    {
        return $this->failedFmtData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedSetLicenseOnholdFulfillmentDataType $failedFmtData
     * @return $this
     */
    public function setFailedFmtData($failedFmtData)
    {
        $this->failedFmtData = $failedFmtData;
        return $this;
    }


}

