<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetFmtAttributesForBatchActivationResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, GetFmtAttributesForBatchDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, GetFmtAttributesForBatchDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): GetFmtAttributesForBatchActivationResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?GetFmtAttributesForBatchDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?GetFmtAttributesForBatchDataType $responseData): GetFmtAttributesForBatchActivationResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
