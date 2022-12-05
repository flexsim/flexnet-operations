<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferredEntitlementsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>
     */
    private $transferredEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>  $transferredEntitlement
     */
    public function __construct(TransferredEntitlementDataType|array $transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>  $transferredEntitlement
     */
    public static function create(TransferredEntitlementDataType|array $transferredEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function getTransferredEntitlement(): TransferredEntitlementDataType|array
    {
        return $this->transferredEntitlement;
    }

    public function withTransferredEntitlement(TransferredEntitlementDataType|array $transferredEntitlement): TransferredEntitlementsListType
    {
        $new = clone $this;
        $new->transferredEntitlement = $transferredEntitlement;

        return $new;
    }
}
