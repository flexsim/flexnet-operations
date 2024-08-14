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
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement = null)
    {
        $this->createdSimpleEntitlement = $createdSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null  $createdSimpleEntitlement
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null
     */
    public function getCreatedSimpleEntitlement(): \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array|null
    {
        return $this->createdSimpleEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType>|null  $createdSimpleEntitlement
     */
    public function withCreatedSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataType|array|null $createdSimpleEntitlement): \Flexnet\EntitlementOrderService\Type\CreatedSimpleEntitlementDataListType
    {
        $new = clone $this;
        $new->createdSimpleEntitlement = $createdSimpleEntitlement;

        return $new;
    }
}
