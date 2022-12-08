<?php

namespace Flexnet\LicenseService\Type;

class DuplicateFulfillmentRecordListDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillment
     */
    public function __construct(FulfillmentIdentifierType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillment
     */
    public static function create(FulfillmentIdentifierType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    public function getFulfillment(): FulfillmentIdentifierType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillment
     * @return DuplicateFulfillmentRecordListDataType
     */
    public function withFulfillment(FulfillmentIdentifierType|array $fulfillment): DuplicateFulfillmentRecordListDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
