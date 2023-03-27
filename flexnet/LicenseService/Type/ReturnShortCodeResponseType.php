<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class ReturnShortCodeResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedReturnShortCodeDataType|null $failedData = null, ReturnedShortCodeDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedReturnShortCodeDataType|null $failedData = null, ReturnedShortCodeDataType|null $responseData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null
     */
    public function getFailedData(): FailedReturnShortCodeDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedReturnShortCodeDataType|null  $failedData
     */
    public function withFailedData(FailedReturnShortCodeDataType|null $failedData): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null
     */
    public function getResponseData(): ReturnedShortCodeDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ReturnedShortCodeDataType|null  $responseData
     */
    public function withResponseData(ReturnedShortCodeDataType|null $responseData): ReturnShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
