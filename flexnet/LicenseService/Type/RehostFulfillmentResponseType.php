<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class RehostFulfillmentResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\RehostResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedRehostResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\RehostResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponselistDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, RehostResponseDataType|null $responseData = null, FailedRehostResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\RehostResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponselistDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, RehostResponseDataType|null $responseData = null, FailedRehostResponselistDataType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): RehostFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\RehostResponseDataType|null
     */
    public function getResponseData(): RehostResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RehostResponseDataType|null  $responseData
     */
    public function withResponseData(RehostResponseDataType|null $responseData): RehostFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRehostResponselistDataType|null
     */
    public function getFailedData(): FailedRehostResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRehostResponselistDataType|null  $failedData
     */
    public function withFailedData(FailedRehostResponselistDataType|null $failedData): RehostFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
