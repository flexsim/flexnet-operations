<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepairFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentDataType>  $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\RepairFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentDataType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\RepairFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairFulfillmentDataType|array<\Flexnet\LicenseService\Type\RepairFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\RepairFulfillmentDataType|array $fulfillment): \Flexnet\LicenseService\Type\RepairFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
