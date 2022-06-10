<?php

namespace Flexsim\FlexnetOperations\Type;

class OnholdFulfillmentListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType|array
     */
    protected $onholdFmtLicenseData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData
     */
    public function __construct($onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData
     */
    public static function create($onholdFmtLicenseData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType|array
     */
    public function getOnholdFmtLicenseData()
    {
        return $this->onholdFmtLicenseData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType|array $onholdFmtLicenseData
     * @return $this
     */
    public function setOnholdFmtLicenseData($onholdFmtLicenseData)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;

        return $this;
    }
}
