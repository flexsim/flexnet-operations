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
    public function __construct(StatusInfoType $statusInfo, CreatedChildLIFmtResponseDataType $responseData = null, FailedChildLIFmtResponseDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, CreatedChildLIFmtResponseDataType $responseData = null, FailedChildLIFmtResponseDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?CreatedChildLIFmtResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?CreatedChildLIFmtResponseDataType $responseData): CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedChildLIFmtResponseDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedChildLIFmtResponseDataType $failedData): CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
