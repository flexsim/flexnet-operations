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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType  $linkMaintenanceLineItem
     * @param  string  $reason
     */
    public function __construct(LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        $this->linkMaintenanceLineItem = $linkMaintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemDataType  $linkMaintenanceLineItem
     * @param  string  $reason
     */
    public static function create(LinkMaintenanceLineItemDataType $linkMaintenanceLineItem, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getLinkMaintenanceLineItem(): LinkMaintenanceLineItemDataType
    {
        return $this->linkMaintenanceLineItem;
    }

    public function withLinkMaintenanceLineItem(LinkMaintenanceLineItemDataType $linkMaintenanceLineItem): FailedLinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->linkMaintenanceLineItem = $linkMaintenanceLineItem;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedLinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}