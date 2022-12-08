<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateFulfillmentResponseType implements ResultInterface
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
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData
     * @param \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData = null, \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData
     * @param \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData = null, \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData = null)
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
     * @return CreateFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData
     * @return CreateFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null $failedData) : \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData
     * @return CreateFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null $responseData) : \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

