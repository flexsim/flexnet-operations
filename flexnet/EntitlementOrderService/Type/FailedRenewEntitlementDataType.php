<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedRenewEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType
     */
    private $entitlementData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType $entitlementData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType $entitlementData): \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
