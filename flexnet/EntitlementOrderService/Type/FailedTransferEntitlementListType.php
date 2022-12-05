<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedTransferEntitlementListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>
     */
    private $failedEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>  $failedEntitlement
     */
    public function __construct(FailedTransferEntitlementDataType|array $failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>  $failedEntitlement
     */
    public static function create(FailedTransferEntitlementDataType|array $failedEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function getFailedEntitlement(): FailedTransferEntitlementDataType|array
    {
        return $this->failedEntitlement;
    }

    public function withFailedEntitlement(FailedTransferEntitlementDataType|array $failedEntitlement): FailedTransferEntitlementListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
