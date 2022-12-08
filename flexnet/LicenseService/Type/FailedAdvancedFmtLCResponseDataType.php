<?php

namespace Flexnet\LicenseService\Type;

class FailedAdvancedFmtLCResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType> $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType> $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>
     */
    public function getFailedFulfillment() : \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType> $failedFulfillment
     * @return FailedAdvancedFmtLCResponseDataType
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array $failedFulfillment) : \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}

