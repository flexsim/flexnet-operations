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
    public function __construct(\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array $failedEntitlement)
    {
        $this->failedEntitlement = $failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>  $failedEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array $failedEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>
     */
    public function getFailedEntitlement(): \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array
    {
        return $this->failedEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType>  $failedEntitlement
     */
    public function withFailedEntitlement(\Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementDataType|array $failedEntitlement): \Flexnet\EntitlementOrderService\Type\FailedTransferEntitlementListType
    {
        $new = clone $this;
        $new->failedEntitlement = $failedEntitlement;

        return $new;
    }
}
