<?php

namespace Flexnet\LicenseService\Type;

class FailedRehostResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null  $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedRehostResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null  $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedRehostResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null
     */
    public function getFailedFulfillment(): \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedRehostResponseDataType|array|null $failedFulfillment): \Flexnet\LicenseService\Type\FailedRehostResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
