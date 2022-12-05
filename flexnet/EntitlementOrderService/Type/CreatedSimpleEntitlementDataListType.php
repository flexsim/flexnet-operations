<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedSimpleEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null
     */
    private $createdSimpleEntitlement;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null  $createdSimpleEntitlement
     */
    public function __construct(CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement = null)
    {
        $this->createdSimpleEntitlement = $createdSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null  $createdSimpleEntitlement
     */
    public static function create(CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    public function getCreatedSimpleEntitlement(): CreatedSimpleEntitlementDataType|array|null
    {
        return $this->createdSimpleEntitlement;
    }

    public function withCreatedSimpleEntitlement(CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement): CreatedSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->createdSimpleEntitlement = $createdSimpleEntitlement;

        return $new;
    }
}
