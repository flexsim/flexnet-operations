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
    public function __construct(\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array|null $entitlementData = null)
    {
        $this->entitlementData = $entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null  $entitlementData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array|null $entitlementData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null
     */
    public function getEntitlementData(): \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array|null
    {
        return $this->entitlementData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array<\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType>|null  $entitlementData
     */
    public function withEntitlementData(\Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataType|array|null $entitlementData): \Flexnet\EntitlementOrderService\Type\CreatedRenewEntitlementDataListType
    {
        $new = clone $this;
        $new->entitlementData = $entitlementData;

        return $new;
    }
}
