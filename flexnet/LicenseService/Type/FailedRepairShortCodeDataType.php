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
     *
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType  $shortCodeData
     */
    public function __construct(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType  $shortCodeData
     */
    public static function create(RepairShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairShortCodeDataType
     */
    public function getShortCodeData(): RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairShortCodeDataType  $shortCodeData
     */
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
