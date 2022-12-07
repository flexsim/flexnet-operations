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
    public function __construct(CreateBulkEntitlementDataType|array $bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     */
    public static function create(CreateBulkEntitlementDataType|array $bulkEntitlement)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>
     */
    public function getBulkEntitlement(): CreateBulkEntitlementDataType|array
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementDataType>  $bulkEntitlement
     * @return CreateBulkEntitlementRequestType
     */
    public function withBulkEntitlement(CreateBulkEntitlementDataType|array $bulkEntitlement): CreateBulkEntitlementRequestType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
