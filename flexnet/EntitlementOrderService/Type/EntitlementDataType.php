<?php

namespace Flexnet\EntitlementOrderService\Type;

class EntitlementDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType|null
     */
    private $simpleEntitlement;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType|null
     */
    private $bulkEntitlement;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType $simpleEntitlement = null, ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType $bulkEntitlement = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType $simpleEntitlement = null, ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType $bulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getSimpleEntitlement(): ?\Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(?\Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType $simpleEntitlement): \Flexnet\EntitlementOrderService\Type\EntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getBulkEntitlement(): ?\Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(?\Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\EntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
