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
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType|array<\Flexnet\LicenseService\Type\FulfillmentIdentifierType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\FulfillmentIdentifierType|array $fulfillment): \Flexnet\LicenseService\Type\DuplicateFulfillmentRecordListDataType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
