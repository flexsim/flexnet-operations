<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class ConsolidateFulfillmentsResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, ConsolidatedResponseDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, ConsolidatedResponseDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): ConsolidateFulfillmentsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?ConsolidatedResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?ConsolidatedResponseDataType $responseData): ConsolidateFulfillmentsResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
