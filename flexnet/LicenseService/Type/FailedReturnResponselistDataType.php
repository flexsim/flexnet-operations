<?php

namespace Flexnet\LicenseService\Type;

class FailedReturnResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array<\Flexnet\LicenseService\Type\FailedReturnResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array<\Flexnet\LicenseService\Type\FailedReturnResponseDataType>|null $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedReturnResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array<\Flexnet\LicenseService\Type\FailedReturnResponseDataType>|null $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedReturnResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array<\Flexnet\LicenseService\Type\FailedReturnResponseDataType>|null
     */
    public function getFailedFulfillment() : \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedReturnResponseDataType|array<\Flexnet\LicenseService\Type\FailedReturnResponseDataType>|null $failedFulfillment
     * @return FailedReturnResponselistDataType
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedReturnResponseDataType|array|null $failedFulfillment) : \Flexnet\LicenseService\Type\FailedReturnResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}

