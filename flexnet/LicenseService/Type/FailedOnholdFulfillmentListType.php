<?php

namespace Flexnet\LicenseService\Type;

class FailedOnholdFulfillmentListType
{
    /**
     * @var \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>
     */
    private $failedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>  $failedFulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>  $failedFulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>
     */
    public function getFailedFulfillment(): \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>  $failedFulfillment
     */
    public function withFailedFulfillment(\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array $failedFulfillment): \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
