<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdvancedFulfillmentLCResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, AdvancedFmtLCResponseDataListType|null $responseData = null, FailedAdvancedFmtLCResponseDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, AdvancedFmtLCResponseDataListType|null $responseData = null, FailedAdvancedFmtLCResponseDataType|null $failedData = null)
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
     * @return AdvancedFulfillmentLCResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null
     */
    public function getResponseData(): AdvancedFmtLCResponseDataListType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataListType|null  $responseData
     * @return AdvancedFulfillmentLCResponseType
     */
    public function withResponseData(AdvancedFmtLCResponseDataListType|null $responseData): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null
     */
    public function getFailedData(): FailedAdvancedFmtLCResponseDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedAdvancedFmtLCResponseDataType|null  $failedData
     * @return AdvancedFulfillmentLCResponseType
     */
    public function withFailedData(FailedAdvancedFmtLCResponseDataType|null $failedData): AdvancedFulfillmentLCResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
