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
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedFulfillmentDataListType|null $failedData = null, CreatedFulfillmentDataListType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedFulfillmentDataListType|null $failedData = null, CreatedFulfillmentDataListType|null $responseData = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null
     */
    public function getFailedData(): FailedFulfillmentDataListType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedFulfillmentDataListType|null  $failedData
     */
    public function withFailedData(FailedFulfillmentDataListType|null $failedData): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null
     */
    public function getResponseData(): CreatedFulfillmentDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataListType|null  $responseData
     */
    public function withResponseData(CreatedFulfillmentDataListType|null $responseData): CreateFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
