<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedUpdateMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
     */
    private $maintenance;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(UpdateMaintenanceDataType $maintenance, string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    public static function create(UpdateMaintenanceDataType $maintenance, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenance(): UpdateMaintenanceDataType
    {
        return $this->maintenance;
    }

    public function withMaintenance(UpdateMaintenanceDataType $maintenance): FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
