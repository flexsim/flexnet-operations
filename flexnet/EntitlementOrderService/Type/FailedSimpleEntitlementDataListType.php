<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedSimpleEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null
     */
    private $failedSimpleEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function __construct(FailedSimpleEntitlementDataType|array $failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public static function create(FailedSimpleEntitlementDataType|array $failedSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null
     */
    public function getFailedSimpleEntitlement(): FailedSimpleEntitlementDataType|array|null
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function withFailedSimpleEntitlement(FailedSimpleEntitlementDataType|array|null $failedSimpleEntitlement): FailedSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->failedSimpleEntitlement = $failedSimpleEntitlement;

        return $new;
    }
}
