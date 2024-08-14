<?php

namespace Flexnet\LicenseService\Type;

class FailedRepairShortCodeDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\RepairShortCodeDataType
     */
    private $shortCodeData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    public static function create(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData): \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
