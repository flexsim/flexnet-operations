<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedTransferEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType
     */
    private $entitlementInfo;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(TransferEntitlementInfoType $entitlementInfo, string $reason)
    {
        $this->entitlementInfo = $entitlementInfo;
        $this->reason = $reason;
    }

    public static function create(TransferEntitlementInfoType $entitlementInfo, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementInfo(): TransferEntitlementInfoType
    {
        return $this->entitlementInfo;
    }

    public function withEntitlementInfo(TransferEntitlementInfoType $entitlementInfo): FailedTransferEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementInfo = $entitlementInfo;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedTransferEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
