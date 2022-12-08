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
     * @param \Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairShortCodeDataType
     */
    public function getShortCodeData() : \Flexnet\LicenseService\Type\RepairShortCodeDataType
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData
     * @return FailedRepairShortCodeDataType
     */
    public function withShortCodeData(\Flexnet\LicenseService\Type\RepairShortCodeDataType $shortCodeData) : \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->shortCodeData = $shortCodeData;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return FailedRepairShortCodeDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

