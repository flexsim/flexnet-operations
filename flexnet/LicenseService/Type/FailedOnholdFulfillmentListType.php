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
    public function __construct(FailedOnholdFulfillmentDataType|array $failedFulfillment)
    {
        $this->failedFulfillment = $failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>  $failedFulfillment
     */
    public static function create(FailedOnholdFulfillmentDataType|array $failedFulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>
     */
    public function getFailedFulfillment(): FailedOnholdFulfillmentDataType|array
    {
        return $this->failedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType|array<\Flexnet\LicenseService\Type\FailedOnholdFulfillmentDataType>  $failedFulfillment
     * @return FailedOnholdFulfillmentListType
     */
    public function withFailedFulfillment(FailedOnholdFulfillmentDataType|array $failedFulfillment): FailedOnholdFulfillmentListType
    {
        $new = clone $this;
        $new->failedFulfillment = $failedFulfillment;

        return $new;
    }
}
