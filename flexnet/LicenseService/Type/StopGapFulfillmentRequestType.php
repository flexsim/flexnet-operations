<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StopGapFulfillmentRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentDataType>
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentDataType>  $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array $fulfillment)
    {
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentDataType>  $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array $fulfillment)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentDataType>
     */
    public function getFulfillment(): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array<\Flexnet\LicenseService\Type\StopGapFulfillmentDataType>  $fulfillment
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\StopGapFulfillmentDataType|array $fulfillment): \Flexnet\LicenseService\Type\StopGapFulfillmentRequestType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
