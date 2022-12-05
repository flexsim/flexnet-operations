<?php

namespace Flexnet\EntitlementOrderService\Type;

class CreatedRenewEntitlementDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null
     */
    private $entitlementData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null  $entitlementData
     */
    public function __construct(CreatedRenewEntitlementDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null  $entitlementData
     */
    public static function create(CreatedRenewEntitlementDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementData(): CreatedRenewEntitlementDataType|array|null
    {
        return $this->entitlementData;
    }

    public function withEntitlementData(CreatedRenewEntitlementDataType|array|null $entitlementData): CreatedRenewEntitlementDataListType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
