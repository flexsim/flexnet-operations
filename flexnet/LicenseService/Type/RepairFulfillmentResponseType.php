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
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->responseData = $responseData;
        $this->failedData = $failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @param \Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData
     * @param \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo, \Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData = null, \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData = null)
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
     * @return RepairFulfillmentResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\RepairResponseDataType|null
     */
    public function getResponseData() : \Flexnet\LicenseService\Type\RepairResponseDataType|null
    {
        return $this->responseData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData
     * @return RepairFulfillmentResponseType
     */
    public function withResponseData(\Flexnet\LicenseService\Type\RepairResponseDataType|null $responseData) : \Flexnet\LicenseService\Type\RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->responseData = $responseData;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null
     */
    public function getFailedData() : \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData
     * @return RepairFulfillmentResponseType
     */
    public function withFailedData(\Flexnet\LicenseService\Type\FailedRepairResponselistDataType|null $failedData) : \Flexnet\LicenseService\Type\RepairFulfillmentResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}

