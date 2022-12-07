<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedUnlinkMaintenanceLineItemDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|null
     */
    private $unlinkMaintenanceLineItem;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|null  $unlinkMaintenanceLineItem
     * @param  string|null  $reason
     */
    public function __construct(UnlinkMaintenanceLineItemDataType|null $unlinkMaintenanceLineItem = null, string|null $reason = null)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|null  $unlinkMaintenanceLineItem
     * @param  string|null  $reason
     */
    public static function create(UnlinkMaintenanceLineItemDataType|null $unlinkMaintenanceLineItem = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|null
     */
    public function getUnlinkMaintenanceLineItem(): UnlinkMaintenanceLineItemDataType|null
    {
        return $this->unlinkMaintenanceLineItem;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemDataType|null  $unlinkMaintenanceLineItem
     * @return FailedUnlinkMaintenanceLineItemDataType
     */
    public function withUnlinkMaintenanceLineItem(UnlinkMaintenanceLineItemDataType|null $unlinkMaintenanceLineItem): FailedUnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->reason;
    }

    /**
     * @param  string|null  $reason
     * @return FailedUnlinkMaintenanceLineItemDataType
     */
    public function withReason(string|null $reason): FailedUnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
