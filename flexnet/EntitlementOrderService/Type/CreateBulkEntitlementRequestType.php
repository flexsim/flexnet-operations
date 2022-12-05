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
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     */
    public static function create(CreateBulkEntitlementDataType|array $bulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    public function __construct(CreateBulkEntitlementDataType $bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
    }

    public function getBulkEntitlement(): CreateBulkEntitlementDataType|array
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(CreateBulkEntitlementDataType|array $bulkEntitlement): CreateBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
