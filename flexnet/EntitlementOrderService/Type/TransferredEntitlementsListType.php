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
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array $transferredEntitlement)
    {
        $this->transferredEntitlement = $transferredEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>  $transferredEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array $transferredEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>
     */
    public function getTransferredEntitlement(): \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array
    {
        return $this->transferredEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType>  $transferredEntitlement
     */
    public function withTransferredEntitlement(\Flexnet\EntitlementOrderService\Type\TransferredEntitlementDataType|array $transferredEntitlement): \Flexnet\EntitlementOrderService\Type\TransferredEntitlementsListType
    {
        $new = clone $this;
        $new->transferredEntitlement = $transferredEntitlement;

        return $new;
    }
}
