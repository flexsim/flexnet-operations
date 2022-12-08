<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFulfillmentAttributesResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, GetFulfillmentAttributesDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, GetFulfillmentAttributesDataType|null $responseData = null)
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
     * @return GetFulfillmentAttributesResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): GetFulfillmentAttributesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType|null
     */
    public function getResponseData(): GetFulfillmentAttributesDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType|null  $responseData
     * @return GetFulfillmentAttributesResponseType
     */
    public function withResponseData(GetFulfillmentAttributesDataType|null $responseData): GetFulfillmentAttributesResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
