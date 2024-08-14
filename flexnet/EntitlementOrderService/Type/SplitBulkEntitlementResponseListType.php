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
    public function __construct(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement)
    {
        $this->splitBulkEntitlement = $splitBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>  $splitBulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>
     */
    public function getSplitBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array
    {
        return $this->splitBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType>  $splitBulkEntitlement
     */
    public function withSplitBulkEntitlement(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementDataType|array $splitBulkEntitlement): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseListType
    {
        $new = clone $this;
        $new->splitBulkEntitlement = $splitBulkEntitlement;

        return $new;
    }
}
