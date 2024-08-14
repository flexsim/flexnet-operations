<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedDeleteEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null  $failedEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array|null $failedEntitlement = null)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null  $failedEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array|null $failedEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null
     */
    public function getFailedEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array|null
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType>|null  $failedEntitlement
     */
    public function withFailedEntitlement(\Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataType|array|null $failedEntitlement): \Flexnet\EntitlementOrderService\Type\FailedDeleteEntitlementDataListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
