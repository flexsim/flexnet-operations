<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetConsolidatedFulfillmentCountResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData = null)
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
     * @return GetConsolidatedFulfillmentCountResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData
     * @return GetConsolidatedFulfillmentCountResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

