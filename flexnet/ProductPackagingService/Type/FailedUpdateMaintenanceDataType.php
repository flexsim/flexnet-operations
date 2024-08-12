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
    public function __construct(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType $maintenance, ?string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType $maintenance, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenance(): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType
    {
        return $this->maintenance;
    }

    public function withMaintenance(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceDataType $maintenance): \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedUpdateMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
