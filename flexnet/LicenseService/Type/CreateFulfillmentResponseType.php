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
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedFulfillmentDataListType $failedData = null, ?\Flexnet\LicenseService\Type\CreatedFulfillmentDataListType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\FailedFulfillmentDataListType $failedData = null, ?\Flexnet\LicenseService\Type\CreatedFulfillmentDataListType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedFulfillmentDataListType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedFulfillmentDataListType $failedData): \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\CreatedFulfillmentDataListType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\CreatedFulfillmentDataListType $responseData): \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
