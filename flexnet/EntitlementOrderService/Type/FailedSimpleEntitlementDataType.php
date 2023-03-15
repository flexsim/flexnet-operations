<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSimpleEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|null
     */
    private $simpleEntitlement;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|null  $simpleEntitlement
     * @param  string|null  $reason
     */
    public function __construct(CreateSimpleEntitlementDataType|null $simpleEntitlement = null, string|null $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|null  $simpleEntitlement
     * @param  string|null  $reason
     */
    public static function create(CreateSimpleEntitlementDataType|null $simpleEntitlement = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|null
     */
    public function getSimpleEntitlement(): CreateSimpleEntitlementDataType|null
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType|null  $simpleEntitlement
     */
    public function withSimpleEntitlement(CreateSimpleEntitlementDataType|null $simpleEntitlement): FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
