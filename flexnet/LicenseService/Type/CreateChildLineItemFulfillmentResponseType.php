<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateChildLineItemFulfillmentResponseType implements ResultInterface
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
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData = null)
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
     * @return CreateChildLineItemFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData
     * @return CreateChildLineItemFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\CreatedChildLIFmtResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData
     * @return CreateChildLineItemFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedChildLIFmtResponseDataType|null $failedData) : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

