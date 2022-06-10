<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedTransferEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType
     */
    protected $entitlementInfo;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo, string $reason)
    {
        $this->entitlementInfo = $entitlementInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType
     */
    public function getEntitlementInfo()
    {
        return $this->entitlementInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferEntitlementInfoType $entitlementInfo
     * @return $this
     */
    public function setEntitlementInfo($entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;

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
