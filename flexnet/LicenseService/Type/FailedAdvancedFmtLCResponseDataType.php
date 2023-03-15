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
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>  $failedFulfillment
     */
    public function __construct(FailedAdvancedFmtLCDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>  $failedFulfillment
     */
    public static function create(FailedAdvancedFmtLCDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>
     */
    public function getFailedFulfillment(): FailedAdvancedFmtLCDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType|array<\Flexnet\LicenseService\Type\FailedAdvancedFmtLCDataType>  $failedFulfillment
     */
    public function withFailedFulfillment(FailedAdvancedFmtLCDataType|array $failedFulfillment): FailedAdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
