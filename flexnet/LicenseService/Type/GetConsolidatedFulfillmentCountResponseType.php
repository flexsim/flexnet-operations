<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetConsolidatedFulfillmentCountResponseType extends Result
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
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType $responseData): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
