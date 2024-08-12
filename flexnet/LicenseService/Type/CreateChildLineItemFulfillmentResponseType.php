<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class CreateChildLineItemFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType $responseData = null, ?\Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, ?\Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType $responseData = null, ?\Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?\Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?\Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType $responseData): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?\Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?\Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType $failedData): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
