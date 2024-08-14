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
    public function __construct(?\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType $simpleEntitlement = null, ?string $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType $simpleEntitlement = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getSimpleEntitlement(): ?\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(?\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementDataType $simpleEntitlement): \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
