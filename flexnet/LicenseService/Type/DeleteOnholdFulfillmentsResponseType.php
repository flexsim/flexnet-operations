<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class DeleteOnholdFulfillmentsResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexnet\LicenseService\Type\FailedOnholdFulfillmentListType|null
     */
    private $failedData;

    /**
     * Constructor
     */
    public function __construct(StatusInfoType $statusInfo, FailedOnholdFulfillmentListType $failedData = null)
    {
        $this->statusInfo = $statusInfo;
        $this->failedData = $failedData;
    }

    public static function create(StatusInfoType $statusInfo, FailedOnholdFulfillmentListType $failedData = null)
    {
        return new static(...\func_get_args());
    }

    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    public function withStatusInfo(StatusInfoType $statusInfo): DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }

    public function getFailedData(): ?FailedOnholdFulfillmentListType
    {
        return $this->failedData;
    }

    public function withFailedData(?FailedOnholdFulfillmentListType $failedData): DeleteOnholdFulfillmentsResponseType
    {
        $new = clone $this;
        $new->failedData = $failedData;

        return $new;
    }
}
