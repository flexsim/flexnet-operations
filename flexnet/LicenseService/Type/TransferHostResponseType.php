<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class TransferHostResponseType extends Result
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
     */
    public function __construct(StatusInfoType $statusInfo, FailedTransferHostListDataType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedTransferHostListDataType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): TransferHostResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedTransferHostListDataType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedTransferHostListDataType $failedData): TransferHostResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
