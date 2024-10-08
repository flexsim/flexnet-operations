<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedEntitlementStateDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType
     */
    private $entitlement;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType $entitlement, string $reason)
    {
        $this->entitlement = $entitlement;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType $entitlement, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlement(): \Flexnet\EntitlementOrderService\Type\EntitlementStateDataType
    {
        return $this->entitlement;
    }

    public function withEntitlement(\Flexnet\EntitlementOrderService\Type\EntitlementStateDataType $entitlement): \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType
    {
        $new = clone $this;
        $new->entitlement = $entitlement;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedEntitlementStateDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
