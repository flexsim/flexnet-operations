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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType  $entitlementData
     */
    public function __construct(RenewEntitlementDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType  $entitlementData
     */
    public static function create(RenewEntitlementDataType $entitlementData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType
     */
    public function getEntitlementData(): RenewEntitlementDataType
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\RenewEntitlementDataType  $entitlementData
     */
    public function withEntitlementData(RenewEntitlementDataType $entitlementData): FailedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedRenewEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
