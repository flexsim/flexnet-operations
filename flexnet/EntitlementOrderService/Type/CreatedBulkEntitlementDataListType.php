<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedBulkEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType>|null
     */
    private $createdBulkEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType>|null  $createdBulkEntitlement
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array|null $createdBulkEntitlement = null)
    {
        $this->createdBulkEntitlement = $createdBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType>|null  $createdBulkEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array|null $createdBulkEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType>|null
     */
    public function getCreatedBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array|null
    {
        return $this->createdBulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType>|null  $createdBulkEntitlement
     */
    public function withCreatedBulkEntitlement(\Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataType|array|null $createdBulkEntitlement): \Flexnet\EntitlementOrderService\Type\CreatedBulkEntitlementDataListType
    {
        $new = clone $this;
        $new->createdBulkEntitlement = $createdBulkEntitlement;

        return $new;
    }
}
