<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateBulkEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>
     */
    private $bulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array $bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array $bulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>
     */
    public function getBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     */
    public function withBulkEntitlement(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
