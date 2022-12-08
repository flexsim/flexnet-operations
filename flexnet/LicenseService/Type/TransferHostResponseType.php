<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TransferHostResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedTransferHostListDataType|null
     */
    private $failedData;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostListDataType|null  $failedData
     */
    public function __construct(StatusInfoType $statusInfo, FailedTransferHostListDataType|null $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostListDataType|null  $failedData
     */
    public static function create(StatusInfoType $statusInfo, FailedTransferHostListDataType|null $failedData = null)
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
     * @return TransferHostResponseType
     */
    public function withStatusInfo(StatusInfoType $statusInfo): TransferHostResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FailedTransferHostListDataType|null
     */
    public function getFailedData(): FailedTransferHostListDataType|null
    {
        return $this->failedData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FailedTransferHostListDataType|null  $failedData
     * @return TransferHostResponseType
     */
    public function withFailedData(FailedTransferHostListDataType|null $failedData): TransferHostResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
