<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUpdateSimpleEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null
     */
    private $failedSimpleEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function __construct(FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public static function create(FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null
     */
    public function getFailedSimpleEntitlement(): FailedUpdateSimpleEntitlementDataType|array|null
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function withFailedSimpleEntitlement(FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement): FailedUpdateSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->failedSimpleEntitlement = $failedSimpleEntitlement;

        return $new;
    }
}
