<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedEntitlementLifeCycleDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
     */
    private $entitlementData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType $entitlementData): \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
