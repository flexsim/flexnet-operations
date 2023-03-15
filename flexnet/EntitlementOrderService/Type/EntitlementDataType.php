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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType|null  $simpleEntitlement
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType|null  $bulkEntitlement
     */
    public function __construct(SimpleEntitlementDataType|null $simpleEntitlement = null, BulkEntitlementDataType|null $bulkEntitlement = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType|null  $simpleEntitlement
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType|null  $bulkEntitlement
     */
    public static function create(SimpleEntitlementDataType|null $simpleEntitlement = null, BulkEntitlementDataType|null $bulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType|null
     */
    public function getSimpleEntitlement(): SimpleEntitlementDataType|null
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\SimpleEntitlementDataType|null  $simpleEntitlement
     */
    public function withSimpleEntitlement(SimpleEntitlementDataType|null $simpleEntitlement): EntitlementDataType
    {
        $new = clone $this;
        $new->simpleEntitlement = $simpleEntitlement;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType|null
     */
    public function getBulkEntitlement(): BulkEntitlementDataType|null
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\BulkEntitlementDataType|null  $bulkEntitlement
     */
    public function withBulkEntitlement(BulkEntitlementDataType|null $bulkEntitlement): EntitlementDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }
}
