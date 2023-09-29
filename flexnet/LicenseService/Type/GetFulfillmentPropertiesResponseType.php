<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetFulfillmentPropertiesResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null
     */
    private $fulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null  $fulfillment
     */
    public function __construct(StatusInfoType $statusInfo, FulfillmentPropertiesType|array $fulfillment = null)
    {
        $this->statusInfo = $statusInfo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null  $fulfillment
     */
    public static function create(StatusInfoType $statusInfo, FulfillmentPropertiesType|array $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetFulfillmentPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null
     */
    public function getFulfillment(): FulfillmentPropertiesType|array|null
    {
        return $this->fulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null  $fulfillment
     */
    public function withFulfillment(FulfillmentPropertiesType|array|null $fulfillment): GetFulfillmentPropertiesResponseType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}
