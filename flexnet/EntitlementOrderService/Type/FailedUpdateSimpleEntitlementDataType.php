<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateSimpleEntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|null
     */
    private $simpleEntitlement;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(UpdateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    public static function create(UpdateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getSimpleEntitlement(): ?UpdateSimpleEntitlementDataType
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(?UpdateSimpleEntitlementDataType $simpleEntitlement): FailedUpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
