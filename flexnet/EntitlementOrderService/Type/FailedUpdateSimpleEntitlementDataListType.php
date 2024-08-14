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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null
     */
    public function getFailedSimpleEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array|null
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function withFailedSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataType|array|null $failedSimpleEntitlement): \Flexnet\EntitlementOrderService\Type\FailedUpdateSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->failedSimpleEntitlement = $failedSimpleEntitlement;

        return $new;
    }
}
