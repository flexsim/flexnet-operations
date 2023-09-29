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
     */
    public function __construct(CreateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    public static function create(CreateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getSimpleEntitlement(): ?CreateSimpleEntitlementDataType
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(?CreateSimpleEntitlementDataType $simpleEntitlement): FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
