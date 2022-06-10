<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSetLicenseOnholdFulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType
     */
    protected $onholdFmtLicenseData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
    {
        $this->onholdFmtLicenseData = $onholdFmtLicenseData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OnHoldFmtLicenseDataType $onholdFmtLicenseData, string $reason)
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
