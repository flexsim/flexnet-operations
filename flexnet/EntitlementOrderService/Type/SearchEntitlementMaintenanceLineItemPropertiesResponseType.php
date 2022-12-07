<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchEntitlementMaintenanceLineItemPropertiesResponseType implements ResultInterface
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
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     */
    public function __construct(StatusInfoType $statusInfo, EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     */
    public static function create(StatusInfoType $statusInfo, EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StatusInfoType  $statusInfo
     * @return SearchEntitlementMaintenanceLineItemPropertiesResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null
     */
    public function getEntitlementMaintenanceLineItem(): EntitlementMaintenanceLineItemPropertiesType|array|null
    {
        return $this->entitlementMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType|array<\Flexnet\EntitlementOrderService\Type\EntitlementMaintenanceLineItemPropertiesType>|null  $entitlementMaintenanceLineItem
     * @return SearchEntitlementMaintenanceLineItemPropertiesResponseType
     */
    public function withEntitlementMaintenanceLineItem(EntitlementMaintenanceLineItemPropertiesType|array|null $entitlementMaintenanceLineItem): SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        $new = clone $this;
        $new->entitlementMaintenanceLineItem = $entitlementMaintenanceLineItem;

        return $new;
    }
}
