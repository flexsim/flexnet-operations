<?php

namespace Flexnet\ProductPackagingService\Type;

class FailedMaintenanceDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType|null
     */
    private $maintenance;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType $maintenance = null, ?string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType $maintenance = null, ?string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenance(): ?\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType
    {
        return $this->maintenance;
    }

    public function withMaintenance(?\Flexnet\ProductPackagingService\Type\CreateMaintenanceDataType $maintenance): \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): \Flexnet\ProductPackagingService\Type\FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
