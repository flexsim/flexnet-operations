<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class GetFulfillmentAttributesResponseType extends Result
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
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType $responseData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\GetFulfillmentAttributesDataType $responseData): \Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
