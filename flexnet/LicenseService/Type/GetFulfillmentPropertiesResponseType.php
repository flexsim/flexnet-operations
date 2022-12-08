<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFulfillmentPropertiesResponseType implements ResultInterface
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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null $fulfillment
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array|null $fulfillment = null)
    {
        $this->statusInfo = $statusInfo;
        $this->fulfillment = $fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null $fulfillment
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array|null $fulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo() : \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @return GetFulfillmentPropertiesResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null
     */
    public function getFulfillment() : \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array|null
    {
        return $this->fulfillment;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentPropertiesType|array<\Flexnet\LicenseService\Type\FulfillmentPropertiesType>|null $fulfillment
     * @return GetFulfillmentPropertiesResponseType
     */
    public function withFulfillment(\Flexnet\LicenseService\Type\FulfillmentPropertiesType|array|null $fulfillment) : \Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType
    {
        $new = clone $this;
        $new->fulfillment = $fulfillment;

        return $new;
    }
}

