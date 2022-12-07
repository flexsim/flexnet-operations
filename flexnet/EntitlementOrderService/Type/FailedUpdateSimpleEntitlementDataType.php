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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|null  $simpleEntitlement
     * @param  string|null  $reason
     */
    public function __construct(UpdateSimpleEntitlementDataType|null $simpleEntitlement = null, string|null $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|null  $simpleEntitlement
     * @param  string|null  $reason
     */
    public static function create(UpdateSimpleEntitlementDataType|null $simpleEntitlement = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|null
     */
    public function getSimpleEntitlement(): UpdateSimpleEntitlementDataType|null
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementDataType|null  $simpleEntitlement
     * @return FailedUpdateSimpleEntitlementDataType
     */
    public function withSimpleEntitlement(UpdateSimpleEntitlementDataType|null $simpleEntitlement): FailedUpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedUpdateSimpleEntitlementDataType
     */
    public function withReason(string|null $reason): FailedUpdateSimpleEntitlementDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
