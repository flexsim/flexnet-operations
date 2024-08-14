<?php

namespace Flexnet\EntitlementOrderService\Type;

use Flexnet\EntitlementOrderService\Result;

class SearchEntitlementMaintenanceLineItemPropertiesResponseType extends Result
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null
     */
    private $entitlementMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo, \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\EntitlementOrderService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\EntitlementOrderService\Type\StatusInfoType $statusInfo): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null
     */
    public function getEntitlementMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array|null
    {
        return $this->entitlementMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     */
    public function withEntitlementMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;

        return $new;
    }
}
