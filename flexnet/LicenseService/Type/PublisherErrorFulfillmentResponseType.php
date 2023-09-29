<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class PublisherErrorFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\PublisherErrorResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, PublisherErrorResponseDataType $responseData = null, FailedPublisherErrorResponselistDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, PublisherErrorResponseDataType $responseData = null, FailedPublisherErrorResponselistDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getResponseData(): ?PublisherErrorResponseDataType
    {
        return $this->responseData;
    }

    public function withResponseData(?PublisherErrorResponseDataType $responseData): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    public function getFailedData(): ?FailedPublisherErrorResponselistDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedPublisherErrorResponselistDataType $failedData): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
