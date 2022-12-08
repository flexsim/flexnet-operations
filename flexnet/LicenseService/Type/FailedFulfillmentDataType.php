<?php

namespace Flexnet\LicenseService\Type;

class FailedFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreateFulfillmentDataType
     */
    private $fulfillment;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public function __construct(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        $this->fulfillment = $fulfillment;
        $this->reason = $reason;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment
     * @param string $reason
     */
    public static function create(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment, string $reason)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreateFulfillmentDataType
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\CreateFulfillmentDataType
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment
     * @return FailedFulfillmentDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\CreateFulfillmentDataType $fulfillment) : \Flexnet\LicenseService\Type\FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

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
     * @return FailedFulfillmentDataType
     */
    public function withReason(string $reason) : \Flexnet\LicenseService\Type\FailedFulfillmentDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}

