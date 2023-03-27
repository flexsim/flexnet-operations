<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetFulfillmentCountResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetFulfillmentCountResponseDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetFulfillmentCountResponseDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): GetFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType|null
     */
    public function getResponseData(): GetFulfillmentCountResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentCountResponseDataType|null  $responseData
     */
    public function withResponseData(GetFulfillmentCountResponseDataType|null $responseData): GetFulfillmentCountResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
