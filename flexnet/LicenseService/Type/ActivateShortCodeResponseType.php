<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ActivateShortCodeResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedShortCodeDataType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null  $responseData
     */
    public function __construct(StatusInfoType $statusInfo, FailedShortCodeDataType|null $failedData = null, CreatedShortCodeDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedShortCodeDataType|null  $failedData
     * @param  \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null  $responseData
     */
    public static function create(StatusInfoType $statusInfo, FailedShortCodeDataType|null $failedData = null, CreatedShortCodeDataType|null $responseData = null)
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
     * @return ActivateShortCodeResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedShortCodeDataType|null
     */
    public function getFailedData(): FailedShortCodeDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedShortCodeDataType|null  $failedData
     * @return ActivateShortCodeResponseType
     */
    public function withFailedData(FailedShortCodeDataType|null $failedData): ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null
     */
    public function getResponseData(): CreatedShortCodeDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedShortCodeDataType|null  $responseData
     * @return ActivateShortCodeResponseType
     */
    public function withResponseData(CreatedShortCodeDataType|null $responseData): ActivateShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}
