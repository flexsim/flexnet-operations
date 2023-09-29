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
    public function __construct(SimpleEntitlementDataType $simpleEntitlement = null, BulkEntitlementDataType $bulkEntitlement = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    public static function create(SimpleEntitlementDataType $simpleEntitlement = null, BulkEntitlementDataType $bulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getSimpleEntitlement(): ?SimpleEntitlementDataType
    {
        return $this->simpleEntitlement;
    }

    public function withSimpleEntitlement(?SimpleEntitlementDataType $simpleEntitlement): EntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    public function getBulkEntitlement(): ?BulkEntitlementDataType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(?BulkEntitlementDataType $bulkEntitlement): EntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
