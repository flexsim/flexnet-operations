<?php

namespace Flexnet\EntitlementOrderService\Type;

class SplitBulkEntitlementResponseListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>
     */
    private $splitBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>  $splitBulkEntitlement
     */
    public function __construct(SplitBulkEntitlementDataType|array $splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>  $splitBulkEntitlement
     */
    public static function create(SplitBulkEntitlementDataType|array $splitBulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function getSplitBulkEntitlement(): SplitBulkEntitlementDataType|array
    {
        return $this->splitBulkEntitlement;
    }

    public function withSplitBulkEntitlement(SplitBulkEntitlementDataType|array $splitBulkEntitlement): SplitBulkEntitlementResponseListType
    {
        $new = clone $this;
        $new->splitBulkEntitlement = $splitBulkEntitlement;

        return $new;
    }
}
