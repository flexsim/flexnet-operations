<?php

namespace Flexnet\LicenseService\Type;

class FailedChildLIFmtResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>  $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>  $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>
     */
    public function getFailedFulfillment(): \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>  $failedFulfillment
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array $failedFulfillment): \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
