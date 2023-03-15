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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType  $entitlementData
     */
    public function __construct(EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        $this->entitlementData = $entitlementData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType  $entitlementData
     */
    public static function create(EntitlementLifeCycleDataType $entitlementData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType
     */
    public function getEntitlementData(): EntitlementLifeCycleDataType
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleDataType  $entitlementData
     */
    public function withEntitlementData(EntitlementLifeCycleDataType $entitlementData): FailedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedEntitlementLifeCycleDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
