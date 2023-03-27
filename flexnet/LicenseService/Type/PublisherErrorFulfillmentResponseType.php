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
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\PublisherErrorResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, PublisherErrorResponseDataType|null $responseData = null, FailedPublisherErrorResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\PublisherErrorResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, PublisherErrorResponseDataType|null $responseData = null, FailedPublisherErrorResponselistDataType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\PublisherErrorResponseDataType|null
     */
    public function getResponseData(): PublisherErrorResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\PublisherErrorResponseDataType|null  $responseData
     */
    public function withResponseData(PublisherErrorResponseDataType|null $responseData): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType|null
     */
    public function getFailedData(): FailedPublisherErrorResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedPublisherErrorResponselistDataType|null  $failedData
     */
    public function withFailedData(FailedPublisherErrorResponselistDataType|null $failedData): PublisherErrorFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
