<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedLinkMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType
     */
    private $linkMaintenanceLineItem;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLinkMaintenanceLineItem(): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType
    {
        return $this->linkMaintenanceLineItem;
    }

    public function withLinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType $linkMaintenanceLineItem): \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItem = $linkMaintenanceLineItem;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\EntitlementOrderService\Type\FailedLinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
