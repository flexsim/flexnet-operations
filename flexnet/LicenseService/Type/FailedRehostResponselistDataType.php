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
    public function __construct(FailedRehostResponseDataType|array $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null  $failedFulfillment
     */
    public static function create(FailedRehostResponseDataType|array $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null
     */
    public function getFailedFulfillment(): FailedRehostResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponseDataType|array<\Flexnet\LicenseService\Type\FailedRehostResponseDataType>|null  $failedFulfillment
     */
    public function withFailedFulfillment(FailedRehostResponseDataType|array|null $failedFulfillment): FailedRehostResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
