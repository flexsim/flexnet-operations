<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetConsolidatedFulfillmentsQueryResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, GetConsolidatedFulfillmentsQueryResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, GetConsolidatedFulfillmentsQueryResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?GetConsolidatedFulfillmentsQueryResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?GetConsolidatedFulfillmentsQueryResponseDataType $responseData): GetConsolidatedFulfillmentsQueryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
