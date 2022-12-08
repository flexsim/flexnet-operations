<?php

namespace Flexnet\LicenseService\Type;

class FailedEmergencyResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array<\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array<\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType>|null $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array<\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType>|null $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array<\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType>|null
     */
    public function getFailedFulfillment() : \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array<\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType>|null $failedFulfillment
     * @return FailedEmergencyResponselistDataType
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedEmergencyResponseDataType|array|null $failedFulfillment) : \Flexnet\LicenseService\Type\FailedEmergencyResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}

