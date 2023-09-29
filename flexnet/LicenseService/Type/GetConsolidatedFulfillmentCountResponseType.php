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
    public function __construct(StatusInfoType $statusInfo, GetConsolidatedFulfillmentCountResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, GetConsolidatedFulfillmentCountResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?GetConsolidatedFulfillmentCountResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?GetConsolidatedFulfillmentCountResponseDataType $responseData): GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
