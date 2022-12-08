<?php

namespace Flexnet\LicenseService\Type;

class CreateLicensesAsBatchResponseDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType> $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType> $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType>
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\FulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentDataType|array<\Flexnet\LicenseService\Type\FulfillmentDataType> $fulfillment
     * @return CreateLicensesAsBatchResponseDataType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\FulfillmentDataType|array $fulfillment) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}

