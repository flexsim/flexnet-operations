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
    public function __construct(CreateMaintenanceDataType $maintenance = null, string $reason = null)
    {
        $this->maintenance = $maintenance;
        $this->reason = $reason;
    }

    public static function create(CreateMaintenanceDataType $maintenance = null, string $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getMaintenance(): ?CreateMaintenanceDataType
    {
        return $this->maintenance;
    }

    public function withMaintenance(?CreateMaintenanceDataType $maintenance): FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->maintenance = $maintenance;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function withReason(?string $reason): FailedMaintenanceDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
