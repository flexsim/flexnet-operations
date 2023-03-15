<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetConsolidatedFulfillmentCountResponseType implements ResultInterface
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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetConsolidatedFulfillmentCountResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetConsolidatedFulfillmentCountResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null
     */
    public function getResponseData(): GetConsolidatedFulfillmentCountResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseDataType|null  $responseData
     */
    public function withResponseData(GetConsolidatedFulfillmentCountResponseDataType|null $responseData): GetConsolidatedFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
