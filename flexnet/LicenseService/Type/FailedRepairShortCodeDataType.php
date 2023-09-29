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
    public function __construct(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    public static function create(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    public function getShortCodeData(): RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    public function withShortCodeData(RepairShortCodeDataType $shortCodeData): FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function withReason(string $reason): FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
