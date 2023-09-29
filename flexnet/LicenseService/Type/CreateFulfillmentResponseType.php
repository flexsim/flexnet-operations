<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class CreateFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null
     */
    private $responseData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedFulfillmentDataListType $failedData = null, CreatedFulfillmentDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(StatusInfoType $statusInfo, FailedFulfillmentDataListType $failedData = null, CreatedFulfillmentDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedFulfillmentDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedFulfillmentDataListType $failedData): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?CreatedFulfillmentDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedFulfillmentDataListType $responseData): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
