<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedLinkMaintenanceLineItemListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType>|null
     */
    private $failedLinkMaintenanceLineItem;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType>|null  $failedLinkMaintenanceLineItem
     */
    public function __construct(FailedLinkMaintenanceLineItemDataType|array|null $failedLinkMaintenanceLineItem = null)
    {
        $this->failedLinkMaintenanceLineItem = $failedLinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType>|null  $failedLinkMaintenanceLineItem
     */
    public static function create(FailedLinkMaintenanceLineItemDataType|array|null $failedLinkMaintenanceLineItem = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType>|null
     */
    public function getFailedLinkMaintenanceLineItem(): FailedLinkMaintenanceLineItemDataType|array|null
    {
        return $this->failedLinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType|array<\Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType>|null  $failedLinkMaintenanceLineItem
     * @return FailedLinkMaintenanceLineItemListType
     */
    public function withFailedLinkMaintenanceLineItem(FailedLinkMaintenanceLineItemDataType|array|null $failedLinkMaintenanceLineItem): FailedLinkMaintenanceLineItemListType
    {
        $new = clone $this;
        $new->failedLinkMaintenanceLineItem = $failedLinkMaintenanceLineItem;

        return $new;
    }
}
