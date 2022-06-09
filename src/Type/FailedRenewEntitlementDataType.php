<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRenewEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType
     */
    protected $entitlementData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType $entitlementData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\RenewEntitlementDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType $entitlementData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\RenewEntitlementDataType $entitlementData, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType
     */
    public function getEntitlementData()
    {
        return $this->entitlementData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\RenewEntitlementDataType $entitlementData
     * @return $this
     */
    public function setEntitlementData($entitlementData)
    {
        $this->entitlementData = $entitlementData;

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
