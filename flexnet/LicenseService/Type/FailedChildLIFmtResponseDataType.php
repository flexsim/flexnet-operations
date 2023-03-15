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
    public function __construct(FailedChildLIFulfillmentDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>  $failedFulfillment
     */
    public static function create(FailedChildLIFulfillmentDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>
     */
    public function getFailedFulfillment(): FailedChildLIFulfillmentDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedChildLIFulfillmentDataType>  $failedFulfillment
     */
    public function withFailedFulfillment(FailedChildLIFulfillmentDataType|array $failedFulfillment): FailedChildLIFmtResponseDataType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
