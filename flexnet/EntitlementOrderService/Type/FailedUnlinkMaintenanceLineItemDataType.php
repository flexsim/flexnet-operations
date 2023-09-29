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
     */
    public function __construct(UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem = null, string $reason = null)
    {
        $this->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;
        $this->reason = $reason;
    }

    public static function create(UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getUnlinkMaintenanceLineItem(): ?UnlinkMaintenanceLineItemDataType
    {
        return $this->unlinkMaintenanceLineItem;
    }

    public function withUnlinkMaintenanceLineItem(?UnlinkMaintenanceLineItemDataType $unlinkMaintenanceLineItem): FailedUnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->unlinkMaintenanceLineItem = $unlinkMaintenanceLineItem;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUnlinkMaintenanceLineItemDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
