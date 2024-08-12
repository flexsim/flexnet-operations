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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        $this->failedSimpleEntitlement = $failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array|null $failedSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null
     */
    public function getFailedSimpleEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array|null
    {
        return $this->failedSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType>|null  $failedSimpleEntitlement
     */
    public function withFailedSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataType|array|null $failedSimpleEntitlement): \Flexnet\EntitlementOrderService\Type\FailedSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->failedSimpleEntitlement = $failedSimpleEntitlement;

        return $new;
    }
}
