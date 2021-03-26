<?php

namespace Flexsim\FlexnetOperations\Type;

class OnholdFulfillmentListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType
     */
    private $onholdFmtLicenseData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType
     */
    public function getOnholdFmtLicenseData()
    {
        return $this->onholdFmtLicenseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData
     * @return $this
     */
    public function setOnholdFmtLicenseData($onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
        return $this;
    }


}

