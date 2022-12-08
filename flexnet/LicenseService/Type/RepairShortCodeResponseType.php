<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RepairShortCodeResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null
     */
    private $failedData;

    /**
     * @var \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null
     */
    private $responseData;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
        $this->responseData = $responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData
     * @param \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData = null, \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData = null)
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
     * @return RepairShortCodeResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData
     * @return RepairShortCodeResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedRepairShortCodeDataType|null $failedData) : \Flexnet\LicenseService\Type\RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData
     * @return RepairShortCodeResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\RepairedShortCodeDataType|null $responseData) : \Flexnet\LicenseService\Type\RepairShortCodeResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }
}

