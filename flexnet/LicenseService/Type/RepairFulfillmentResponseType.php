<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RepairFulfillmentResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\RepairResponseDataType|null
     */
    private $responseData;

    /**
     * @var \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\RepairResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, RepairResponseDataType|null $responseData = null, FailedRepairResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\RepairResponseDataType|null  $responseData
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, RepairResponseDataType|null $responseData = null, FailedRepairResponselistDataType|null $failedData = null)
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
    public function withStatusInfo(StatusInfoType $statusInfo): RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairResponseDataType|null
     */
    public function getResponseData(): RepairResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\RepairResponseDataType|null  $responseData
     */
    public function withResponseData(RepairResponseDataType|null $responseData): RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null
     */
    public function getFailedData(): FailedRepairResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null  $failedData
     */
    public function withFailedData(FailedRepairResponselistDataType|null $failedData): RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
