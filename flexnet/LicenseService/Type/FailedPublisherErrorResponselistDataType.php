<?php

namespace Flexnet\LicenseService\Type;

class FailedPublisherErrorResponselistDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array<\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType>|null
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array<\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType>|null $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array|null $failedFulfillment = null)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array<\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType>|null $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array|null $failedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array<\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType>|null
     */
    public function getFailedFulfillment() : \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array|null
    {
        return $this->failedFulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array<\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType>|null $failedFulfillment
     * @return FailedPublisherErrorResponselistDataType
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedPublisherErrorResponseDataType|array|null $failedFulfillment) : \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}

