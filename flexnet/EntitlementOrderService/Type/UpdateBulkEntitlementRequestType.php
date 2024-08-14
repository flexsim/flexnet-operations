<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateBulkEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType>
     */
    private $bulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType>  $bulkEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array $bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType>  $bulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array $bulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType>
     */
    public function getBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType>  $bulkEntitlement
     */
    public function withBulkEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementDataType|array $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
