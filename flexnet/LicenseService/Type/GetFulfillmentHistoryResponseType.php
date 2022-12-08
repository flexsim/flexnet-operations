<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFulfillmentHistoryResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentHistoryDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FulfillmentHistoryDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FulfillmentHistoryDataType|null $responseData = null)
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
     * @return GetFulfillmentHistoryResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetFulfillmentHistoryResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryDataType|null
     */
    public function getResponseData(): FulfillmentHistoryDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDataType|null  $responseData
     * @return GetFulfillmentHistoryResponseType
     */
    public function withResponseData(FulfillmentHistoryDataType|null $responseData): GetFulfillmentHistoryResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
